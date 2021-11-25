<?php

$servidor = "localhost";
$usuarioDB = "root";
$pwdDB = "";
$nombreDB = "proyectoweb";

$conexion = mysqli_connect($servidor, $usuarioDB, $pwdDB, $nombreDB);

if (mysqli_connect_error()) {
    echo "No conectado " . mysqli_connect_error();
} else {
    //echo "CONECTADO";
}
