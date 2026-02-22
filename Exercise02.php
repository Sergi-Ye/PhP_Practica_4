<?php
session_start();

if(isset($_POST["add"]) || isset($_POST["remove"])) {
    $_SESSION["worker"] = $_POST["worker"];
    $_SESSION["product"] = $_POST["product"];
    $_SESSION["quantity"] = $_POST["quantity"];
}

if(!isset($_SESSION["worker"])){
    $_SESSION["worker"] = null;
}

if(!isset($_SESSION["inventario"])){
    $_SESSION["inventario"] = array("milkQuantity" => 0, "sodaQuantity" => 0);
}


if(isset($_POST["add"])) {
    if($_SESSION["product"] == "milk"){

        $_SESSION["inventario"]["milkQuantity"] += $_SESSION["quantity"];

    }else{
        $_SESSION["inventario"]["sodaQuantity"] += $_SESSION["quantity"];
    }
}

if(isset($_POST["remove"])) {
    if($_SESSION["product"] == "milk"){
        if($_SESSION["inventario"]["milkQuantity"] >= $_SESSION["quantity"]){

            $_SESSION["inventario"]["milkQuantity"] -= $_SESSION["quantity"];
        }else{
            echo "Cantidad insuficiente";
        }

    }else{
        if($_SESSION["inventario"]["sodaQuantity"] >= $_SESSION["quantity"]){

            $_SESSION["inventario"]["sodaQuantity"] -= $_SESSION["quantity"];
        }else{
            echo "Cantidad insuficiente";
        }
    }
}

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
        <input type="text" name="worker" value="<?php echo $_SESSION["worker"]; ?>">

        <br><h2>Choose product:</h2>
        <select name="product">
            <option value="milk">Milk</option>
            <option value="soda">Soda</option>
        </select>

        <br>
        <h2>Product quality:</h2>
        <input type="text" name="quantity" required>
        <br>

        <input type="submit" name="add" value="Add">
        <input type="submit" name="remove" value="Remove">
        <input type="reset" value="Reset">

    </form>
    <br>

    <h2>Inventory:</h2>
        <b>Worker: </b> 
            <?php echo $_SESSION['worker']; ?> <br><br>

        <b>Units milk: </b> 
            <?php echo $_SESSION["inventario"]["milkQuantity"]; ?> <br><br>

        <b>Units soda: </b>
            <?php echo $_SESSION["inventario"]["sodaQuantity"]; ?> <br><br>
</div>

</body>
</html>