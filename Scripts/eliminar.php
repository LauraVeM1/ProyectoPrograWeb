<?php 
session_start();

$servidor = "localhost";
$usuarioBD = "root";
$pwBD = "";
$nomBd = "proyectoweb";
$idCom=$_GET['id_com'];

$db = mysqli_connect($servidor, $usuarioBD, $pwBD, $nomBd);

if (!$db) {
    die("La conexión falló" . mysqli_connect_error());
} else {
    mysqli_query($db, "SET NAMES 'UTF8'");
}
    $sql1 = "DELETE FROM COMENTARIOS WHERE id_comentario=$idCom";
$sql1 = mysqli_query($db, $sql1);
if($sql1){
    echo "1";
}else{
    echo "2";
}
?>