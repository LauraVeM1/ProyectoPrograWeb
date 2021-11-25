<?php 
//Reseteo.
$opcion = '';
//Si está definido el formulario.
if (isset($_POST)) {
    //Comprobamos que no este vacío input.
    if (empty($_POST['opcion'])) {
        echo "Elige una opción. <a href='Registro.php'>Regresar</a>";
    } else {

        //Obtenemos valor input radio.
        $opcion = $_POST['opcion'] ?: '';
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        //Redirigimos según opción seleccionado.
        if ($opcion == 'Lector') {
            echo '<script>window.location="../Registro/RegistroLector.php?email='.$email.'&pass='.$pass.'"</script>';
        } else {
            echo '<script>window.location="../Registro/RegistroEscritor.php?email='.$email.'&pass='.$pass.'"</script>';
        }
    }   
}
?>
