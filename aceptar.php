<?php

include('conexion.php');

$idEliminar = $_POST['idUser'];
$sql = "UPDATE comentarios SET estatus = 'activo' WHERE id_comentario = '$idEliminar'";
$result_update = mysqli_query($conexion, $sql) or die("ERROR EN LA CONSULTA");
