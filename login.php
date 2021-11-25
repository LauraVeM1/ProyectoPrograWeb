
<?php
$usuario = $emailErr = $Errore = $pass = $passErr = $rol = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $emailErr = $Errore = $pass = $passErr = "";
    if (empty($_POST["txtUsuario"])) {
        $emailErr = "Correo es requerido";
        $Errore = "si";
    } else {
        $correo = filter_var($_POST["txtUsuario"], FILTER_SANITIZE_EMAIL);

        if (filter_var($correo, FILTER_VALIDATE_EMAIL) === false) {
            $emailErr = "No es un correo valido";
            $Errore = "Si";
        }
    }
    if (empty($_POST["txtpass"])) {
        $passErr = "Contraseña requerida";
        $Errore = "si";
    } else {
        $pass = verificaContra($_POST["txtpass"]);
    }
    if ($Errore == "si") {
    } else {

        $inc = require_once 'includes/dbcon.php';
        $usuario = $_POST['txtUsuario'];
        $contra = $_POST['txtpass'];

        if ($inc) {
            $consulta = "SELECT * FROM usuario WHERE correo ='$usuario' and password = '$contra'";
            $resultados = mysqli_query($conn, $consulta);
            if ($resultados) {
                while ($item = $resultados->fetch_array()) {
                    $usuario = $item['correo'];
                    $pass = $item['password'];
                    $nombre =$item['nombre'];
                    $rol = $item['id_rol'];
                    $idUsuario = $item['id_usuario'];
                }
            }
            //Escritores
            if ($rol == "1") {
                session_start();
                $_SESSION['idLogin'] = $idUsuario;
                $_SESSION['nombreUsuario']=$nombre;
                $_SESSION['rol']=$rol;
                $_SESSION['aut'] = true;
?>              <script type="text/javascript">
                    // window.location = "escritorHome.php"
                    window.location = "escritorHome.php"
                </script>
            <?php
            //Lectores
            } else if ($rol == "2") {
                session_start();
                $_SESSION['idLogin'] = $idUsuario;
                $_SESSION['nombreUsuario']=$nombre;
                $_SESSION['rol']=$rol;
                $_SESSION['aut'] = true;
            ?> 
                <script type="text/javascript">
                    // window.location = "escritorHome.php"
                    window.location = "Articulos.php"
                </script>
            <?php
            //Auditores
            } else if ($rol == "3") {
                session_start();
                $_SESSION['idLogin'] = $idUsuario;
                $_SESSION['nombreUsuario']=$nombre;
                $_SESSION['rol']=$rol;
                $_SESSION['aut'] = true;
            ?>
                <script type="text/javascript">
                    window.location = "escritorHome.php"
                </script> 
<?php

            } else {
                $passErr = "*Usuario o contraseña incorrecto";
            }
        }
    }
}

function verificaContra($entrada)
{
    $entrada = trim($entrada);
    $entrada = stripslashes($entrada);
    $entrada = htmlspecialchars($entrada);

    return $entrada;
}


?>
<?php require_once 'templates/header.php' ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <i class="fa fa-user fa-4x center"style="color:black;"></i>
    </div>
    <h3 class="display text-center"style="color:black;">Inicia sesión a GuerraBlog</h3>
    <br>
    <div class="jumbotron w-50 mx-auto bg-dark mb-0" >
        <form method="post" action="login.php" type="submit" id="formLogin" name="formLogin">
            <div class="row">
                <div class="col">
                    <h5 align="left">Correo electrónico<span class="error">*</span></h5>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text fa fa-at" id="correo"></span>
                        </div> 
                        <input type="email" name="txtUsuario" id="usuario" class="form-control" placeholder="Ingrese correo electrónico" required>
                        
                    </div>
                    <br><span class="error"><?php echo $emailErr ?></span>
                    <h5 align="left">Contraseña<span class="error">*</span></h5>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text fa fa-lock" id="contrasenia"></span>
                        </div>
                        <input type="password" name="txtpass" id="pass" class="form-control" placeholder="Ingrese contraseña" required>
                    </div>
                    <br><span class="error text-center"><?php echo $passErr ?></span>
                    <div class="row justify-content-center">
                        <button name="btnLogin" id="btnLogin" class="btn btn-info text-center" type="submit">
                            <span class="fa fa-sign-in"></span> Iniciar sesión
                        </button>
                    </div>
                    <br>
                    <div class="row justify-content-around">
                        <div class="col-sm-4">
                            <button id="btnCancelar" class="btn btn-danger" type="button" name="cancelar" onclick="location.href='index.php'">
                                <span class="fa fa-times"></span> Cancelar
                            </button>
                        </div>
                        <div class="col-sm-8">
                            <p align="end">¿No te has registrado?<a href="registro.php"><i><u style="margin-left:10px">Registrate</u></i></a></p> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    include 'templates/footer.php';
?>