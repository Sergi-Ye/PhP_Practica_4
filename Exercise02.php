<?php
    session_start();
    $_SESSION["name"];

    if(!isset($_SESSION["name"])) {
        $_SESSION["name"] = array(10, 20, 30);
    }

    $array = $_SESSION["array"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>

<div>
    <h1>Supermarket management</h1>
    <form method="post">

        Worker name:
        <input type="text" name="name">

        <br><h2>Choose product:</h2>
        <select>
            <option value="milk">Milk</option>
            <option value="soda">Soda</option>
        </select>

        <br>
        <h2>Product quality:</h2>
        <input type="text" name="quantity">
        <br>

        <input type="submit" name="add">
        <input type="submit" name="remove">
        <input type="submit" name="reset">

    </form>
</div>

<br><h2>Inventory:</h2>
<?php


echo ""

?>



</body>
</html>