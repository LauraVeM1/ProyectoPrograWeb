<?php require_once 'templates/header.php' ?>
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
                    $rol = $item['id_rol'];
                    $idUsuario = $item['id_usuario'];
                }
            }
            //Escritores
            if ($rol == "1") {
                session_start();
                $_SESSION['idLogin'] = $idUsuario;
?>              <script type="text/javascript">
                    window.location = "escritorHome.php"
                </script>
            <?php
            //Lectores
            } else if ($rol == "2") {
            ?> 
                <script type="text/javascript">
                    window.location = "escritorHome.php"
                </script>
            <?php
            //Auditores
            } else if ($rol == "3") {
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

<div class="container-fluid p-5">
    <figure class="text-center" style="margin:0;"><img class="img-login" src="img/user_1.png" alt="Usuario">
        <p class="text-dark lead font-weight-bold mb-0">Iniciar sesion a GuerraBlog</p>
    </figure>

    <form class="text-center login p-4" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group text-justify">
            <small class="error font-weight-bold">*Campo obligatorio</small>
        </div>
        <div class="form-group text-justify">
            <label>Correo Electrónico</label><span class="error">*</span><br>
            <input type="text" name="txtUsuario" class="form-control" id="usuario" placeholder="@Correo" required><br><span class="error"><?php echo $emailErr ?></span>
        </div>
        <div class="form-group text-justify">
            <label>Contraseña</label><span class="error">*</span><br>
            <input type="password" class="form-control" name="txtpass" id="pass" placeholder="Contraseña" required><br><span class="error text-center"><?php echo $passErr ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn-login btn-brown" name="btnLogin" id="btnLogin" value="Ingresar">
        </div>
        <div class="form-group text-right">
            <button style="padding: 0" class="btn font-weight-bold text-white">Registrarse</button>
        </div>
    </form>
</div>

<?php require_once 'templates/footer.php' ?>