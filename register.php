<?php
include 'includes/db.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO users(name,email,password)
              VALUES('$name','$email','$password')";

    mysqli_query($conn, $query);

    header('Location: login.php');
}
?>

<?php include 'includes/header.php'; ?>

<form method="POST">

<h2>Register</h2>

<input type="text" name="name" placeholder="Enter Name" required>

<input type="email" name="email" placeholder="Enter Email" required>

<input type="password" name="password" placeholder="Enter Password" required>

<button class="btn" name="register">Register</button>

</form>

<?php include 'includes/footer.php'; ?>