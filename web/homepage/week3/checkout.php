<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <meta name="author" content="Brad">
    <link rel="stylesheet" href="../styles.css">

</head>
<body>
    <?php include('../nav.php')?>
    <h1>Checkout</h1>
    <form method="POST" action="confirmation.php">
        <input type="text" class="street" name="street" placeholder="Street">
        <input type="text" class="city" name="city" placeholder="City, State">
        <input type="text" class="zip" name="zip" placeholder="Zip Code"><br>
        <input type="submit" name="submit" value="Submit"><br>
        <a class="button" href="cart.php">Back to Cart</a>
      </form>
</body>
</html>
