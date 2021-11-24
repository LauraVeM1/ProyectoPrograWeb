<?php
include "includes/dbcon.php";
session_start();

$newPass = $_POST['pass']; 
$newDir = $_POST['direccion'];
$newTel  = $_POST['telefono'];
$id = $_SESSION["iduser"];

if ($newPass == '') {
    echo "Error Introduce una nueva contraseña <br>";
} else if ($newDir == '') {
    echo "Error Introduce una nueva direccion <br>";
} else if ($newTel == '') {
    echo "Error Introduce un nuevo telefono";
}
else { 
    $sql = "UPDATE  usuario  SET password ='".$newPass."', direccion ='".$newDir."',
    telefono ='".$newTel."' WHERE id_usuario = ".$id." ";
    if ($conn->query($sql) === TRUE) {
        header("Location: escritorHome.php");
    } else {

        echo "Error: " . $sql . "<br>" . $conn->error . "";
    }
    $conn->close();
}

?>