<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
        <input type="number" name="pwsLength">
        <input type="submit" value="CHECK">
    </form>


    <?php

    require_once __DIR__ . "/partials/functions.php";

        
        $pwsLength = $_GET["pwsLength"];
        $randomPassword = generateRandomPassword($pwsLength);

        echo "Generated Password: $randomPassword";
    ?>
</body>
</html>