<?php
include "includes/dbcon.php";
session_start();

$idart = $_GET['idpub'];

if ($idart == '') {
    echo "Error PUBLICAR <br>";
}else { 
    $sql = "UPDATE  articulo  SET estatus_articulo ='publicado' WHERE id_articulo = ".$idart." ";
    if ($conn->query($sql) === TRUE) {
        header("Location: articulosEscritor.php");
    } else {

        echo "Error: " . $sql . "<br>" . $conn->error . "";
    }
    $conn->close();
}

?>