<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cart</title>
    <meta name="author" content="Brad">
    <link rel="stylesheet" href="../styles.css">

</head>
    <body>
        <?php include('../nav.php')?>
        <?php
        if ($_SESSION["item"] == 0) {
            echo "<p> cart is empty </p>";
        }
    
        if ($_SESSION['item'] > 0) {
            echo "<div class='mushroom'>";
            echo "<img src='images/mushroom.jpg'>";
            echo "<p>One mushroom</p>";
        }
                        ?>
    </body>
</html>