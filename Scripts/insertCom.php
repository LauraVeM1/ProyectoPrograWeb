<?php 
session_start();
$idUser=$_SESSION['idLogin'];
$idCorreo=$_SESSION['correo'];
$servidor = "localhost";
$usuarioBD = "root";
$pwBD = "";
$nomBd = "proyectoweb";
$idArt=$_GET['id_art'];
$fecha=$_GET['fecha'];
$contenido=$_GET['contenido'];
$db = mysqli_connect($servidor, $usuarioBD, $pwBD, $nomBd);

if (!$db) {
    die("La conexión falló" . mysqli_connect_error());
} else {
    mysqli_query($db, "SET NAMES 'UTF8'");
}
    $sql1 = "INSERT INTO COMENTARIOS VALUES(null,'$idUser','$idArt','$fecha','$contenido','')";

$sql1 = mysqli_query($db, $sql1);
if($sql1){
    echo "1";
}else{
    echo "2";
}
