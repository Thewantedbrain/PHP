<?php 
if($_POST){
    $boton=$_POST['btnValor'];
    switch($boton){
        case 1:
            echo "1";
            break;
            case 2:
                echo "2";
                break;
                case 3:
                    echo "3";
                    break;

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">

    <input type="submit" name="btnValor" value="1">
    <br/>
    <input type="submit" name="btnValor" 
value="2">
<br/>
<input type="submit" name="btnValor" 
value="3">
<br/>

    </form>
</body>
</html>