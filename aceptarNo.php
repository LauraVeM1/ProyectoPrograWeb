<?php

include('conexion.php');

$idEscritor = $_POST['idEscri'];

$sql = "UPDATE usuario SET estatus = 'pendi' WHERE id_usuario= '$idEscritor'";
$result_update = mysqli_query($conexion, $sql) or die("ERROR EN LA CONSULTA");
