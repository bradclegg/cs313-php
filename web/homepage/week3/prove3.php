<?php
session_start();
	if (!isset($_SESSION['item'])) {
        $_SESSION["item"] = 0;
	}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>week 3 prove</title>
        <meta name="author" content="Brad">
        <link rel="stylesheet" href="../styles.css">

    </head>
    <body>
        <?php include('../nav.php')?>
        <form methode="post" action="cart.php">
            <div class="line1">
                <div class="mushroom">
                    <img src="images/mushroom.jpg">
                    <p>One mushroom</p>
                    <input type="submit" name="mushroom" value="add to cart">
                    <?php
						if (isset($_POST["mushroom"]))
						{
                            $_SESSION["item"] += 1;
						}
					?>
                </div>
                <div class="lifeMushroom">
                    <img src="images/life.jpg">
                    <p>One life mushroom</p>
                </div>
                <div class="firelower">
                    <img src="images/fire.jpg">
                    <p>One fire flower</p>
                </div>
            </div>
            <div class="line2">
                <div class="greenShell">
                    <img src="images/greenShell.jpg">
                    <p>One green shell</p>
                </div>
                <div class="blueShell">
                    <img src="images/blueShell.jpg">
                    <p>One blue shell</p>
                </div>
                <div class="star">
                    <img src="images/star.jpg">
                    <p>One super star</p>
                </div>
            </div>
        </form>
    </body>
</html>