<?php 
function imprimirNombre($nombre){
    echo "Hola ".$nombre."<br/>";

}
$numeroAleatorio=rand(1,10);
echo $numeroAleatorio."<br/>";

$r="Oscar";
$nombreMayusculas= strtoupper($r);
echo $nombreMayusculas."<br/>";

imprimirNombre("Negro");
imprimirNombre("Pedrp");
?>