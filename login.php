<?php

session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    header( 'Location: /rfid/home.php' );
}

require 'database.php';

if ( !empty( $_POST['email'] ) && !empty( $_POST['password'] ) ):
$pdo = Database::connect();
$records = $pdo->prepare( 'SELECT id,email,password FROM admins WHERE email = :email' );
$records->bindParam( ':email', $_POST['email'] );
$records->execute();

$results = $records->fetch( PDO::FETCH_ASSOC );

$message = '';

if (  $results  > 0 && password_verify( $_POST['password'], $results['password'] ) ) {

    $_SESSION['user_id'] = $results['id'];
    header( 'Location: /rfid/home.php' );

} else {
    $message = 'Sorry, those credentials do not match';
    alert( 'Invalid Username or Password' );

    
}
Database::disconnect();

endif;
function alert( $msg ) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<meta http-equiv = 'X-UA-Compatible' content = 'ie=edge'>
<link href = 'css/login.css' rel = 'stylesheet'>
<title>Document</title>
</head>
<body>

<div class = 'wrapper fadeInDown'>
<div id = 'formContent'>
<!-- Tabs Titles -->

<!-- Icon -->
<div class = 'fadeIn first'>
<img src = 'http://danielzawadzki.com/codepen/01/icon.svg' id = 'icon' alt = 'User Icon' />
</div>

<!-- Login Form -->
<form action = 'login.php' method = 'POST'>
<input type = 'text' id = 'login' class = 'fadeIn second' name = 'email' placeholder = 'login'>
<input type = 'text' id = 'password' class = 'fadeIn third' name = 'password' placeholder = 'password'>
<input type = 'submit' class = 'fadeIn fourth' value = 'Log In'>
</form>

<!-- Remind Passowrd -->
<div id = 'formFooter'>
<a class = 'underlineHover' href = 'register.php'>Forgot Password?</a>
</div>

</div>
</div>
</body>
</html>