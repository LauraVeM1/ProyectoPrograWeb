<?php
include "includes/dbcon.php";
session_start();

$iduser = $_SESSION["iduser"];
$tema = $_POST['tema'];
$subtema  = $_POST['subtema'];
$img  = $_POST['imagen'];
$contenido  = $_POST['contenido'];

if ($tema == '') {
    echo "Error Introduce tema <br>";
} else if ($subtema == '') {
    echo "Error Introduce el subtema<br>";
} else if ($img == '') {
    echo "Error Introduce img";
}
elseif($contenido = ''){
    echo "Error Introduce contenido";
}else {
    $sql = "INSERT INTO articulo 
            VALUES ('" . $iduser . "','" . $tema . "','" . $subtema . "','" . $contenido . "','" . $img . "','sin publicar')";
    if ($conn->query($sql) === TRUE) {
        header("Location: crearArticulo.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "";
    }
    $conn->close();
}

?>