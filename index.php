<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
       <label for="">Username</label>
       <input type="text" name="username">
       <label for="">Password</label>
       <input type="password" name="password">
       <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php 
session_start();
//  if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $username = htmlspecialchars($_POST["username"]);
//     $password = htmlspecialchars($_POST["password"]);

//     echo "Username: " . $username . "<br>";
//     echo "Password: " . $password;
//  }

if(isset($_POST["username"]) && isset($_POST["password"])){
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        echo "Username: " . $_SESSION["username"] . "<br>";
        echo "Password" . $_SESSION["password"];

        header("Location: home.php");
    }else{
        echo "missting username/password";
    }
}
 
?>