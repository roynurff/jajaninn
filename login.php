<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: home.php");
	} else {
		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>Login</h1>
                <hr>
                <p>Snack sales platform for college students</p>
                <label for="Email">Email</label>
                <input type="text" placeholder="example@gmail.com" name="email" value="<?php echo $email; ?>" >
                <label for="Password">Password</label>
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" >
                <div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
                <p>
                    <a href="reset password.html" class="small-link">Forgot Password?</a>
                    <a href="register.php" class="small-link">Don't Have Any Account?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="assets/image login.png" alt="">
        </div>
    </div>
    
    </div>
</body>
</html>