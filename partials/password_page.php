<?php
session_start();

// Recupera la password dalla sessione
$generatedPassword =$_SESSION["generatedPassword"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Page</title>
</head>
<body>
    <h1>Generated Password:</h1>
    <h2><?php echo $generatedPassword; ?></h2>
</body>
</html>