<?php
session_start();
include 'includes/db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users 
              WHERE email='$email' 
              AND password='$password'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['user'] = $email;

        setcookie("user", $email, time()+3600);

        header('Location: index.php');

    } else {

        echo "Invalid Login";
    }
}
?>

<?php include 'includes/header.php'; ?>

<form method="POST" onsubmit="return validateForm()">

<h2>Login</h2>

<input type="email" 
       id="email" 
       name="email" 
       placeholder="Enter Email">

<input type="password" 
       name="password" 
       placeholder="Enter Password">

<button class="btn" name="login">Login</button>

</form>

<?php include 'includes/footer.php'; ?>