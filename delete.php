<?php
include "includes/dbcon.php";

$idart = $_GET['delet'];

if ($idart == '') {
    echo "Error DELETE <br>";
} else { 
    $sql = "DELETE FROM articulo WHERE id_articulo = ".$idart." ";
    if ($conn->query($sql) === TRUE) {
        header("Location: articulosEscritor.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "";
    }
    $conn->close();
}

?>