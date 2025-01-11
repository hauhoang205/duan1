<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="total.php" method="post">
    <label for="">Quantity</label>
    <input type="text" name="quantity">
    <input type="submit" value="total">
    </form>
</body>
</html>

<?php
   $item = "pizza";
   $price = 5.99;
   $lll =312;
   $quantity = htmlspecialchars($_POST["quantity"]);
   $total = $price * $quantity ;

   echo "Total: " . $total ;
?>