<?php
$conexion = mysqli_connect("127.0.0.1", "leo", "leo123","tutorial") or die("no conecto");

mysqli_query($conexion,"SET NAMES 'utf8'");

$chipid = $_POST ['chipId'];
$temperatura = $_POST ['temperatura'];

mysqli_query($conexion,"INSERT INTO `tutorial`.`registros` (`id`, `chipId`, `fecha`, `temperatura`) VALUES (NULL, '$chipid', CURRENT_TIMESTAMP, '$temperatura');");

mysqli_close();

echo "Datos ingresados correctamente.";
?>
