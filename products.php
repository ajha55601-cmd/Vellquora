<?php
include 'includes/db.php';
include 'includes/header.php';

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

<section class="products">

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<div class="card">

    <img src="<?php echo $row['image']; ?>">

    <h2><?php echo $row['name']; ?></h2>

    <p>₹<?php echo $row['price']; ?></p>

    <button class="btn">Add to Cart</button>

</div>

<?php } ?>

</section>

<?php include 'includes/footer.php'; ?>