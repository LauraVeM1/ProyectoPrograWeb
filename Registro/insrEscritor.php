<?php
    include '../templates/header.php';
    include '../templates/dbcon.php';
    $message='';
        
        $nombre=$_POST['nombre'];
        $pass = $_GET['pass'];
        $email = $_GET['email'];
        $apellido=$_POST['apellido'];
        $edad=$_POST['edad'];
        $rfc=$_POST['rfc'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $referencias=$_POST['referencias'];


        if(!empty($email)&&!empty($pass) &&
            !empty($_POST['nombre'])&& !empty($_POST['apellido']) &&
            !empty($_POST['edad'])&&!empty($_POST['rfc']) &&
            !empty($_POST['direccion'])&&!empty($_POST['telefono'])
            &&!empty($_POST['referencias'])){
                $sql="INSERT INTO usuario (nombre, apellido, correo, password, rfc, edad, direccion, telefono, referencias, estatus, id_rol) VALUES ('$nombre', '$apellido', '$email', '$pass', '$rfc', '$edad', '$direccion', '$telefono', '$referencias', 'pendiente', '1')";
                $stmt = $con->prepare($sql);
                if($stmt->execute()){
                    $message = 'Successfully created new user';
                }else{
                    $message='Sorry';
                }
                echo '<script>window.location="../login.php"</script>';
        }
        
    
?>
