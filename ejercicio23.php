<?php 

$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasena="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contrasena );

    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg');";

    $conexion->exec($sql);

    echo "conexion establecido";

}catch(PDOException $error){
    echo "cenexion erronea ".$error;

}

?>