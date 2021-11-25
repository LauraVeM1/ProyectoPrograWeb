<?php

include('conexion.php');

$idEscritor = $_POST['idEsc'];

$sql = "UPDATE usuario SET estatus = 'activo' WHERE id_usuario= '$idEscritor'";
$result_update = mysqli_query($conexion, $sql) or die("ERROR EN LA CONSULTA");
