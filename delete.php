<?php

include('conexion.php');

$nombree = $_POST['nom'];
$apellidoo = $_POST['ape'];
$cor = $_POST['co'];
$sqll = "INSERT INTO sancionados (id_sancionado, nombre, apellido, correo, descripcion_sancion) values (0, '$nombree', '$apellidoo', '$cor', 'Cuenta eliminada permanentemente.')";
$res = mysqli_query($conexion, $sqll) or die("ERROR EN LA CONSULTA");

$idEliminar = $_POST['idUse'];
$sql = "DELETE FROM usuario WHERE id_usuario = '$idEliminar'";
$result_update = mysqli_query($conexion, $sql) or die("ERROR EN LA CONSULTA");

$idEli = $_POST['idCo'];
$eli = ("DELETE FROM comentarios WHERE id_comentario='" . $idEli . "'");
$result = mysqli_query($conexion, $eli) or die("ERROR EN LA CONSULTA");
