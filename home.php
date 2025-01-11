<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="home.php" method="post">
        <label for="">This is the home page</label>
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>
<?php
session_start();

if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Password: " . $_SESSION["password"];
}else{
    echo "Ko tim thay";
}

if(isset($_POST["logout"])){
    session_destroy();
    header("Location: index.php");
}
?>

