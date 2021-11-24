<?php
        $servidor = "localhost";
        $usuarioBD = "root";
        $pwBD = "";
        $correo=$_POST['correo'];
        $contra=$_POST['contrasenia'];
        $nomBd = "proyectoweb";
        $db = mysqli_connect($servidor, $usuarioBD, $pwBD, $nomBd);
        if (!$db) {
            die("La conexión falló" . mysqli_connect_error());
        } else {
            mysqli_query($db, "SET NAMES 'UTF8'");
        }
        $sql1 = "SELECT * FROM USUARIO where correo='$correo' AND password='$contra'";
        $sql1 = mysqli_query($db, $sql1);
        if($sql1->num_rows==1){
            session_start();
            $fila=$sql1->fetch_assoc();
         $_SESSION['name']=$fila['nombre'];
         $_SESSION['correo']=$fila['correo'];
        }
        echo json_encode($sql1->num_rows);
