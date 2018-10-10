<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>confirmation</title>
    <meta name="author" content="Brad">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <?php include('../nav.php')?>
    <?php 
    if ($_SESSION['item1'] > 0) {
        echo "<div class='mushroom'>";
        echo "<img src='images/mushroom.jpg'>";
        echo "<p>One Mushroom</p>";
        echo "</div>";
    }

    $address = $_POST['street'] . $_POST['city'] . $_POST['zip'];

    echo $address;
    ?>
   
</body>
</html>