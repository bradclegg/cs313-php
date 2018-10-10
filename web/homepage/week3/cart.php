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

            if ($_SESSION['item1'] > 0) {
                echo "<div class='mushroom'>";
                echo "<img src='images/mushroom.jpg'>";
                echo "<p>One Mushroom</p>";
                echo "</div>";
            }

            if ($_SESSION['item2'] > 0) {
                echo "<div class='lifeMushroom'>";
                echo "<img src='images/life.jpg'>";
                echo "<p>One Up</p>";
                echo "</div>";
            }

            if ($_SESSION['item3'] > 0) {
                echo "<div class='fireFlower'>";
                echo "<img src='images/fire.jpg'>";
                echo "<p>One Fire Flower</p>";
                echo "</div>";
            }

            if ($_SESSION['item4'] > 0) {
                echo "<div class='greenShell'>";
                echo "<img src='images/greenShell.jpg'>";
                echo "<p>One Green Shell</p>";
                echo "</div>";
            }

            if ($_SESSION['item5'] > 0) {
                echo "<div class='blueShell'>";
                echo "<img src='images/blueShell.jpg'>";
                echo "<p>One Blue Shell</p>";
                echo "</div>";
            }

            if ($_SESSION['item6'] > 0) {
                echo "<div class='star'>";
                echo "<img src='images/star.jpg'>";
                echo "<p>One Super Star</p>";
                echo "</div>";
            }
 ?>
    </body>
</html>