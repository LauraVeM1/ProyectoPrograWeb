<?php

include('conexion.php');

$nombree = $_POST['nomb'];
$apellidoo = $_POST['apel'];
$correooo = $_POST['corre'];
$sqll = "INSERT INTO sancionados (id_sancionado, nombre, apellido, correo, descripcion_sancion) values (0, '$nombree', '$apellidoo', '$correooo', 'Cuenta suspendida temporalmente.')";
$res = mysqli_query($conexion, $sqll) or die("ERROR EN LA CONSULTA");

$idEliminar = $_POST['idUser'];
$sql = "UPDATE usuario SET estatus = 'inactivo' WHERE id_usuario= '$idEliminar'";
$result_update = mysqli_query($conexion, $sql) or die("ERROR EN LA CONSULTA");

$idEli = $_POST['idCom'];
$eli = ("DELETE FROM comentarios WHERE id_comentario='" . $idEli . "'");
$result = mysqli_query($conexion, $eli) or die("ERROR EN LA CONSULTA");
