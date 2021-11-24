<?php
    include '../templates/header.php';
    include '../templates/dbcon.php';
    $message='';
        
        $nombre=$_POST['nombre'];
        $pass = $_GET['pass'];
        $email = $_GET['email'];
        $apellido=$_POST['apellido'];
        $edad=$_POST['edad'];


        if(!empty($email)&&!empty($pass) &&
            !empty($_POST['nombre'])&& !empty($_POST['apellido']) &&
            !empty($_POST['edad'])){
                $sql="INSERT INTO usuario (nombre, apellido, correo, password, edad, estatus, id_rol) VALUES ('$nombre', '$apellido', '$email', '$pass', '$edad', 'activo', '2')";
                $stmt = $con->prepare($sql);
                if($stmt->execute()){
                    $message = 'Successfully created new user';
                }else{
                    $message='Sorry';
                }
                echo '<script>window.location="../Sesion/login.php"</script>';
        }
        
    
?>