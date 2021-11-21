<?php require_once 'templates/header.php' ?>

<div class="container-fluid p-5">
    <figure class="text-center" style="margin:0;"><img class="img-login" src="img/user_1.png" alt="Usuario">
        <p class="text-dark lead font-weight-bold mb-0">Iniciar sesion a GuerraBlog</p>
    </figure>

    <form class="text-center login p-4" method="post" action="">
        <div class="form-group text-justify">
          <label>Correo Electrónico</label><br>
          <input type="text" name="txtUsuario" class="form-control" id="usuario" placeholder="@Correo" required>
        </div>
        <div class="form-group text-justify">
          <label>Contraseña</label><br>
          <input type="password" class="form-control" name="txtpass" id="pass" placeholder="Contraseña" required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn-login btn-brown" name="btnLogin" id="btnLogin" value="Ingresar">
        </div>
        <div class="form-group text-right">
            <button style="padding: 0" class="btn font-weight-bold">Registrarse</button>
        </div>
    </form>
</div>

<?php require_once 'templates/footer.php' ?>