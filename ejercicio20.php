<?php 

$fruta=array("f","Fresa","Pera");

print_r($fruta);

echo $fruta[1]."<br/>";

for($indice=0;$indice<3;$indice++){
    echo $fruta[$indice]."<br/>";
}

foreach($fruta as $indice=>$valor){
    echo $valor."<br/>";
}

?>