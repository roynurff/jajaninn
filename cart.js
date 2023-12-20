        let openShopping = document.querySelector('.shop');
        let closeShopping = document.querySelector('.closeShopping');
        let list = document.querySelector('.list');
        let listCard = document.querySelector('.listCard');
        let body = document.querySelector('body');
        let total = document.querySelector('.total');
        let quantity = document.querySelector('.quantity');
        const totals = document.querySelector('.total');
        
        openShopping.addEventListener('click', ()=>{
            body.classList.add('active');
        })
        closeShopping.addEventListener('click', ()=>{
            body.classList.remove('active');
        })
        
        let products = [
            {
                id: 1,
                name: 'BASRENG',
                image: 'basreng.jpg',
                price: 10000
            },
            {
                id: 2,
                name: 'MAKARONI',
                image: 'makaroni.jpg',
                price: 11000
            },
            {
                id: 3,
                name: 'BAKSO',
                image: 'bakso.jpg',
                price: 12000
            },
            {
                id: 4,
                name: 'MIE AYAM',
                image: 'mia ayam.jpg',
                price: 13000
            },
            {
                id: 5,
                name: 'KERIPIK',
                image: 'keripik.jpg',
                price: 14000
            },
            {
                id: 6,
                name: 'NASI GORENG',
                image: 'nasi goreng.jpg',
                price: 15000
            }
        ];
        let listCards  = [];
        function initApp(){
            products.forEach((value, key) =>{
                let newDiv = document.createElement('div');
                newDiv.classList.add('item');
                newDiv.innerHTML = `
                    <img src="assets/${value.image}">
                    <div class="title">${value.name}</div>
                    <div class="price">${value.price.toLocaleString()}</div>
                    <button onclick="addToCard(${key})">Add To Cart</button>`;
                list.appendChild(newDiv);
            })
        }
        initApp();
        function addToCard(key){
            if(listCards[key] == null){
                // copy product form list to list card
                listCards[key] = JSON.parse(JSON.stringify(products[key]));
                listCards[key].quantity = 1;
            }
            reloadCard();
        }
        function reloadCard(){
            listCard.innerHTML = '';
            let count = 0;
            let totalPrice = 0;
            listCards.forEach((value, key)=>{
                totalPrice = totalPrice + value.price;
                count = count + value.quantity;
                if(value != null){
                    let newDiv = document.createElement('li');
                    newDiv.innerHTML = `
                        <div><img src="assets/${value.image}"/></div>
                        <div>${value.name}</div>
                        <div>${value.price.toLocaleString()}</div>
                        <div>
                            <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                            <div class="count">${value.quantity}</div>
                            <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                        </div>`;
                        listCard.appendChild(newDiv);
                }
            })
            total.innerText = totalPrice.toLocaleString();
            quantity.innerText = count;
        }
        
        total.addEventListener('click', () => {
            if (listCards.length > 0) {
              window.location.href = "payment.html";
              
            } else {
              window.location.href = "cart.html";
            }
          });
        
        
        
        closeShopping.addEventListener('click', () => {
            if (listCards.length > 0) {
              window.location.href = "cart.html";
            } else {
              window.location.href = "cart.html";
            }
          });
        
          
        function changeQuantity(key, quantity){
            if(quantity == 0){
                delete listCards[key];
            }else{
                listCards[key].quantity = quantity;
                listCards[key].price = quantity * products[key].price;
            }
            reloadCard();
        }
        

