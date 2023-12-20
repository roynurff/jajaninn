<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <!--home header navbar-->
        <header>
            <a href="#" class="logo">
                <img src="assets/logo.png" alt="Logo" />
            </a>

            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="about.html">about</a>
                <a href="cart.html">product</a>
                <a href="review.html">review</a>
                <a href="contact.html">contact</a>
                <a href="logout.php">log out</a>
            </nav>

            <div class="icons">
                <a href="cart.html" class="fas fa-shopping-cart"></a>
            </div>
        </header>

        <section class="home" id="home">

            <div class="content">
                <h3>Welcome To Our Store</h3>
                <span>eat something</span>
                <p>Silahkan Memilih Jajanan Kesukaan Kamuuu</p>
                <a href="cart.html" class="btn">shop now</a>
            </div>

        </section>

        <section class="about" id="about">

            <h1 class="heading"> <span> about </span> us </h1>
            
            <div class="row">

                <div class="video-container">
                    <video src="assets/about.mp4" loop autoplay muted></video>
                </div>

                <div class="content">
                    <h3>why chose us?</h3>
                    <p>karena kami adalah website penyedia
                        makanan terbaik di unesa, kami bisa membuat anda beli secara real time
                        dan diantar dengan cepat setelah membeli makanan</p>
                    <a href="learn more.html" class="btn">learn more</a>
                    </p>
                </div>
            </div>

        </section>

        <section class="product" id="product">
            <h1 class="heading"> <span>Our</span> Products </h1>

            <div class="card">
                <div class="imgBox">
                    <img src="assets/basreng.jpg" alt="basreng" class="basreng">
                </div>
                <div class="contentBox">
                    <h3>Basreng</h3>
                    <h2 class="price">RP.25.000</h2>
                    <a href="cart.html" class="buy">Add To Cart</a>
                </div>
            </div>
        
            <div class="card">
                <div class="imgBox">
                    <img src="assets/makaroni.jpg" alt="makaroni" class="makaroni">
                </div>
                <div class="contentBox">
                    <h3>Makaroni</h3>
                    <h2 class="price">RP.30.000</h2>
                    <a href="cart.html" class="buy">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="imgBox">
                    <img src="assets/keripik.jpg" alt="keripik" class="keripik">
                </div>
                <div class="contentBox">
                    <h3>Keripik</h3>
                    <h2 class="price">RP.20.000</h2>
                    <a href="cart.html" class="buy">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="imgBox">
                    <img src="assets/mia ayam.jpg" alt="mie" class="mie">
                </div>
                <div class="contentBox">
                    <h3>Mie Ayam</h3>
                    <h2 class="price">RP.10.000</h2>
                    <a href="cart.html" class="buy">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="imgBox">
                    <img src="assets/bakso.jpg" alt="bakso" class="bakso">
                </div>
                <div class="contentBox">
                    <h3>Bakso</h3>
                    <h2 class="price">RP.10.000</h2>
                    <a href="cart.html" class="buy">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="imgBox">
                    <img src="assets/nasi goreng.jpg" alt="nasi" class="nasi">
                </div>
                <div class="contentBox">
                    <h3>Nasi Goreng</h3>
                    <h2 class="price">RP.12.000</h2>
                    <a href="cart.html" class="buy">Add To Cart</a>
                </div>
            </div>
        
        </section>

        <section class="review" id="review">
            <h1 class="heading"> <span>Review</span> Customer </h1>

            <div class="col">
                <div class="reviews">
                    <img src="assets/laki.jpg" alt="">
                            <div class="name">Rido Hasan</div>
                            <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            </div>

                            <p>
                                Saya sangat senang dengan pesanan saya di toko online ini. 
                                Saya baru saja mencoba hidangan ditawarkan dan saya benar-benar terkesan. 
                                Jajanannya sangat fresh dan dari segi rasa serta teksturnya benar-benar istimewa.
                            </p>
                        </div>
                    </div> 
                </div>

               <div class="col">
                    <div class="reviews">
                        <img src="assets/cewek.jpg" alt="">
                        <div class="name">Raisa Putri</div>
                        <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>

                        <p>
                            Makakanan disini murah murah dan terjangkau jika ingin beli
                            beli saja karena murah dan banyak dapatnya cocok untuk mahasiswa seperti saya.
                            Jadi saya sangat merekomendasikan website ini untuk dicoba
                        </p>
                    </div>
                </div> 
            </div>
            
                <div class="col">
                    <div class="reviews">
                        <img src="assets/laki2.jpg" alt="">
                        <div class="name">Mikel</div>
                        <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>

                        <p>
                            Saya ingin memuji pelayanan mereka. 
                            Pemesanan saya tiba lebih cepat dari yang diharapkan, dan semuanya dalam kondisi sempurna.
                            Untuk mahasiswa yang tinggal di kost memesan jajanan ringan di website ini sangatlah cocok.
                        </p>
                    </div>
                </div> 
            </div>
        
        </section>

        <section class="contact" id="contact">
            <h1 class="heading"> <span>Contact</span> Us </h1>
            
            <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <form action="home.html">
                    <h2>Contact Admin</h2>
                    <input type="text" class="field" placeholder="Your Name">
                    <input type="text" class="field" placeholder="Your Email">
                    <input type="text" class="field" placeholder="Phone">
                    <textarea placeholder="Message" class="field"></textarea>
                    <button href="home.html" class="btn">Send To Admin</button>
                </form>
                </div>
            </div>

        </section>

        <footer class="footer">
            <div class="container-footer">
             <div class="row-footer">
               <div class="footer-col">
                 <h4>my website</h4>
                 <ul>
                   <li><a href="about.html">about us</a></li>
                   <li><a href="cart.html">product</a></li>
                   <li><a href="review.html">review</a></li>
                   <li><a href="contact.html">contact us</a></li>
                 </ul>
               </div>
               <div class="footer-col">
                 <h4>Website Contact</h4>
                 <ul>
                   <li><a>snacksales@gmail.com</a></li>
                   <li><a>(+62)87987821765</a></li>
                   <li><a>(+62)87678876543</a></li>
                 </ul>
               </div>
               <div class="footer-col">
                 <h4>online shop</h4>
                 <ul>
                   <li><a>snack</a></li>
                   <li><a>food</a></li>
                   <li><a>ice</a></li>
                 </ul>
               </div>
               <div class="footer-col">
                 <h4>follow us</h4>
                 <div class="social-links">
                   <a href="https://m.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                   <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                   <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                   <a href="https://id.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                 </div>
               </div>
             </div>
            </div>
        </footer>

    </body>
</html>
