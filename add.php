<?php
include "includes/dbcon.php";
session_start();

$iduser = $_SESSION["iduser"];
$tema = $_POST['tema'];
$subtema  = $_POST['subtema'];
$img  = $_POST['imagen'];
$contenido  = $_POST['content'];

if ($tema == '') {
    echo "Error Introduce tema <br>";
} else if ($subtema == '') {
    echo "Error Introduce el subtema<br>";
} else if ($img == '') {
    echo "Error Introduce img";
}
elseif($contenido == ''){
    echo "Error Introduce contenido";
}else {
    $sql = "INSERT INTO articulo (id_autor, tema, subtema, contenido, imagen, estatus)
            VALUES (" . $iduser . ",'" . $tema . "','" . $subtema . "','" . $contenido . "','img/" . $img . "','sin publicar')";
    if ($conn->query($sql) === TRUE) {
        header("Location: escritorHome.php");
        echo '<script> window.alert("Bienvenido a nuestro sitio web"); </script>';
    } else {

        echo "Error: " . $sql . "<br>" . $conn->error . "";
    }
    $conn->close();
}

?>