<?php require_once 'templates/header.php' ?>

<div class="container-fluid p-5">
    <figure class="text-center" style="margin:0;"><img class="img-login" src="img/user_1.png" alt="Usuario">
        <p class="text-dark lead font-weight-bold mb-0">Iniciar sesion a GuerraBlog</p>
    </figure>
    
    <form class="text-center login p-4" method="post" action="">
        <div class="form-group text-justify">
        <small class="error font-weight-bold">*Campo obligatorio</small>
        </div>
        <div class="form-group text-justify">
          <label>Correo Electrónico</label><span class="error">*</span><br>
          <input type="text" name="txtUsuario" class="form-control" id="usuario" placeholder="@Correo" required>
        </div>
        <div class="form-group text-justify">
          <label>Contraseña</label><span class="error">*</span><br>
          <input type="password" class="form-control" name="txtpass" id="pass" placeholder="Contraseña" required> 
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

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $emailErr = $Errore = $pass = $passErr = "";
        if(empty($_POST["usuario"])){
            $emailErr = "Correo es requerido";
            $Errore="si";
        } else{
            $correo = filter_var($_POST["usuario"],FILTER_SANITIZE_EMAIL);

            if(filter_var($correo,FILTER_VALIDATE_EMAIL)=== false){
                $emailErr="No es un correo valido";
                $Errore="Si";
            }  
        }
        if(empty($_POST["pass"])){
            $passErr = "Contraseña requerida";
            echo $passErr;
            $Errore="si";
        } else{
            $pass= verificaContra($_POST["pass"]);
            if(!preg_match('/[A-Z]/', $pass)){
                $passErr="La contraseña debe tener: Minimo 4 letras y una letra mayuscula";
                $Errore="si";
            }
            /*Usar funcion para verificar contraseña */
            
            //$sexo = verificaEntrada($_POST["genero"]);
        }
        if($Errore=="si"){
        }
        else{

            session_start();
            $_SESSION['usuario'] = $_REQUEST['usuario'];

            require_once 'validar.php';
            
        }
        
    }

    function verificaContra($entrada){
        $entrada = trim($entrada);
        $entrada = stripslashes($entrada);
        $entrada = htmlspecialchars($entrada);
         
        return $entrada;
    }

?>