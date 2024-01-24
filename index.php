<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <?php

    require_once __DIR__ . "/partials/functions.php";

    session_start();

    ?>

</head>
<body>
<form>
        <input type="number" name="pwsLength">
        <input type="submit" value="GENERATE">
    </form>


    <?php
        if(isset($_GET["pwsLength"])){
            $pwsLength = $_GET["pwsLength"];
            $randomPassword = generateRandomPassword($pwsLength);

            // Salva la password nella sessione
            $_SESSION["generatedPassword"] = $randomPassword;

            header("Location: partials/password_page.php");
        }
    ?>
</body>
</html>