<?php $servidor = "localhost";
        $usuarioBD = "root";
        $pwBD = "";
        $nomBd = "proyectoweb";
        $db = mysqli_connect($servidor, $usuarioBD, $pwBD, $nomBd);

        if (!$db) {
            die("La conexión falló" . mysqli_connect_error());
        } else {
            mysqli_query($db, "SET NAMES 'UTF8'");
        }
        if($_POST['consulta']='BUSQA'){
        $busqueda=$_POST['txtBusqueda'];
        $sql1 = "SELECT * FROM ARTICULO where LOWER(subtema) LIKE LOWER('%$busqueda%')";
        $sql1 = mysqli_query($db, $sql1);
        echo json_encode($sql1->fetch_all());
        }
?>