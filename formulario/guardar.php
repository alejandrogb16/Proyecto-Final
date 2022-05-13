<?php
include("abre.php");

$nombre     = $_POST['nombre'];
$correo     = $_POST['correo'];
$mensaje    = $_POST['mensaje'];

$consulta = "INSERT INTO datos(nombre,correo, mensaje) VALUES
('$nombre', '$correo', '$mensaje')";


if ($conexion->query($consulta) === TRUE){
    /*header("Location: index.php");*/
}else{
    echo "Error: " . $consulta . "<br>" . $conexion->error;
}
$conexion->close();

?>