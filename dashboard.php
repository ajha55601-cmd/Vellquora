<?php

session_start();

if(!isset($_SESSION['user'])){
    header('Location: ../login.php');
}

?>

<h1>Admin Dashboard</h1>

<a href="add-product.php">Add Product</a>