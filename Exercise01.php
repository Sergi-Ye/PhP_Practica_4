<?php
    session_start();
    if(!isset($_SESSION["array"])) {
        $_SESSION["array"] = array(10, 20, 30);
    }

    $array = $_SESSION["array"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

<div>
    <h1>Modify array saved in session</h1>

    <form method="post">
        Position to modify:
            <select name="position">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        <br><br>

        New value:
            <input type="text" name="value">
        <br><br>

        <input type="submit" value="Modify" name="modify">
        <input type="submit" value="Average" name="average">
        <input type="reset" value="Reset" name="reset">

    </form>
</div>

<?php
    if (isset($_POST['modify'])) {

        $position = $_POST["position"];
        $valor = $_POST["value"];

        $array[$position] = $valor;
        $_SESSION["array"] = $array;
    }


    echo "<br>Current array: ";

    if (isset($_SESSION["array"])) {
        foreach($array as $i){
                echo $i . ", ";
        }
    }else{
        echo "No datos";
    }


    if (isset($_POST['average'])) {
        $total = 0;
        foreach($array as $i){
            $total+= (int)$i;
        }
        $media = $total/3;
        echo "<br>Average: $media";
    }
?>
 
</body>
</html>