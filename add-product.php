<?php

include '../includes/db.php';

if(isset($_POST['add'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $query = "INSERT INTO products(name,price,image)
              VALUES('$name','$price','$image')";

    mysqli_query($conn, $query);

    echo "Product Added Successfully";
}

?>

<form method="POST">

<h2>Add Product</h2>

<input type="text" 
       name="name" 
       placeholder="Product Name">

<br><br>

<input type="text" 
       name="price" 
       placeholder="Product Price">

<br><br>

<input type="text" 
       name="image" 
       placeholder="Image URL">

<br><br>

<button name="add">Add Product</button>

</form>