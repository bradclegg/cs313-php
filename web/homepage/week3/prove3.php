<?php
session_start();
	if (!isset($_SESSION['item'])) {
        $_SESSION["item1"] = 0;
        $_SESSION["item2"] = 0;
        $_SESSION["item3"] = 0;
        $_SESSION["item4"] = 0;
        $_SESSION["item5"] = 0;
        $_SESSION["item6"] = 0;
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
        <form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
            <div class="line1">
                <div class="mushroom">
                    <img src="images/mushroom.jpg">
                    <p>One mushroom</p>
                    <input type="submit" name="mushroom" value="add to cart">
                    <?php
						if (isset($_POST["mushroom"]))
						{
                            $_SESSION["item1"] += 1;
                            $_SESSION['item'] += 1;
						}
					?>
                </div>
                <div class="lifeMushroom">
                    <img src="images/life.jpg">
                    <p>One life mushroom</p>
                    <input type="submit" name="life" value="add to cart">
                    <?php
						if (isset($_POST["life"]))
						{
                            $_SESSION["item2"] += 1;
						}
					?>
                </div>
                <div class="firelower">
                    <img src="images/fire.jpg">
                    <p>One fire flower</p>
                    <input type="submit" name="fire" value="add to cart">
                    <?php
						if (isset($_POST["fire"]))
						{
                            $_SESSION["item3"] += 1;
						}
					?>
                </div>
            </div>
            <div class="line2">
                <div class="greenShell">
                    <img src="images/greenShell.jpg">
                    <p>One green shell</p>
                    <input type="submit" name="greenShell" value="add to cart">
                    <?php
						if (isset($_POST["greenShell"]))
						{
                            $_SESSION["item4"] += 1;
						}
					?>
                </div>
                <div class="blueShell">
                    <img src="images/blueShell.jpg">
                    <p>One blue shell</p>
                    <input type="submit" name="blueShell" value="add to cart">
                    <?php
						if (isset($_POST["blueShell"]))
						{
                            $_SESSION["item5"] += 1;
						}
					?>
                </div>
                <div class="star">
                    <img src="images/star.jpg">
                    <p>One super star</p>
                    <input type="submit" name="star" value="add to cart">
                    <?php
						if (isset($_POST["star"]))
						{
                            $_SESSION["item6"] += 1;
						}
					?>
                </div>
            </div>
        </form>
    </body>
</html>