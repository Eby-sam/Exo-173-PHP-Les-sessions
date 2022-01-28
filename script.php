<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page</title>
    <?php
    if ($_POST["color"] === "Bleu") { ?>
        <style>
            body{
                background-color: #67adcd;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "Bleu";
    }
    elseif ($_POST["color"] === "Gris") { ?>
        <style>
            body{
                background-color: #868889;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "Gris";
    }
    elseif ($_POST["color"] === "Rouge") { ?>
        <style>
            body{
                background-color: #E5584F;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "Rouge";
    }
    elseif ($_POST["color"] === "Violet") { ?>
        <style>
            body{
                background-color: #9B73B2;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "Violet";
    }
    elseif ($_POST["color"] === "Jaune") { ?>
        <style>
            body{
                background-color: #F0E28A;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "Jaune";
    }
    else {?>
        <style>
            body{
                background-color: #FFFFFF;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "Blanc";
    }

    ?>
</head>
<body>

    <a href="index.php">Index</a>
    <a href="page1.php">Page1</a>
    <a href="page2.php">Page2</a>
    <a href="page3.php">Page3</a>

</body>
</html>
