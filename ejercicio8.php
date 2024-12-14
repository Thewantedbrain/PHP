<?php   
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma =$valorA+$valorB;
    echo $suma;

    if($valorA>$valorB){
        echo " A es mayor";
    } else{
        echo "No";
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
    <form action="ejercicio8.php" method="post">
        Valor A:
    <input type="txt" name="valorA" id="">
    <br/>
    Valor B:
    <input type="txt" name="valorB" id="">
    <br/>
    <input type="submit" value="Calcular">
</body>
</html>