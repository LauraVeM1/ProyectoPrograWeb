<?php include 'includes/header.php';
session_start(); ?>

<div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px; padding: 0px;">
    <h1 class="text-center" style="font-size: 90px; margin-bottom: 0px;">EXU3U4</h1>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: rgb(225, 174, 222); height: 70px; margin-top: 0px;">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <a class="nav-item nav-link active" style="color: white; vertical-align: center;" href="#"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
        <a class="nav-item nav-link active" style="color: white;" href="#"><i class="fa fa-heart" aria-hidden="true"></i></i> Nosotros</a>
    </ul>
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar sesion</button>
    </form>
</nav>

<div class="card mx-auto" style="width: 18rem; margin-top: 2rem;">
  <div class="card-header" style="margin-bottom: 5px; background-color: whitesmoke;">
  <div class="card-header" style="margin-bottom: 5px;  background-color: #c5d8e1; color:white; text-align: center;">
      Iniciar sesion
  </div>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1"><i class="fa fa-user-o" aria-hidden="true"></i> Correo</label>
    <input type="email" class="form-control" id="correo" placeholder="name@example.com" required="true">
  </div>
  <div class="form-group">
    <label for="contrasenia"><i class="fa fa-key " aria-hidden="true"></i> Contraseña</label>
    <input type="password" class="form-control" id="contrasenia"  required="true">
    <div id="resultadoContra"></div> 
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
  </div>
  <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary" style="margin-top: 1rem;" onclick="verificarDatos()">Ingresar</button></div>
</form>
</div>
</div>

<?php require_once 'includes/footer.php' ?>