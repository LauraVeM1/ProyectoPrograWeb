<?php
include "includes/dbcon.php";
session_start();

$idart = $_POST['idart']; 
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
elseif($contenido == ''){
    echo "Error Introduce contenido";
}else { 
    $sql = "UPDATE  articulo  SET tema ='".$tema."', subtema ='".$subtema."',
    contenido ='".$contenido."', imagen ='img/".$img."' WHERE id_articulo = ".$idart." ";
    if ($conn->query($sql) === TRUE) {
        header("Location: articulosEscritor.php");
    } else {

        echo "Error: " . $sql . "<br>" . $conn->error . "";
    }
    $conn->close();
}

?>