<?php
    include '../templates/header.php';
    if(!empty($_POST['email'])&&!empty($_POST['pass'])){

    }
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <i class="fa fa-user fa-4x center"style="color:black;"></i>
    </div>
    <h3 class="display text-center"style="color:black;">Regístrate a GuerraBlog</h3>
    <br>
    <div class="jumbotron w-50 mx-auto bg-dark" >
        <form method="post" action="../Registro/Registrar.php" type="submit" id="formSignUp" name="formSignUp">
            <div class="row">
                <div class="col">
                    <h5 align="left">Correo electrónico</h5>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text fa fa-at" id="correo"></span>
                        </div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese correo electrónico" required>
                    </div>
                    <br>
                    <h5 align="left">Contraseña</h5>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text fa fa-lock" id="contrasenia"></span>
                        </div>
                        <input type="password" name="pass" id="pass"  title="6 Caracteres, Minimo: 1 Mayuscula, 1 numero, 1 minuscula" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$" class="form-control" placeholder="Ingrese contraseña" required>
                    </div>
                    <br>
                    <h5 align="left">Selecciona una opción:</h5>
                    <div class="input-group mb-4  justify-content-around">
                        <!-- Material inline 1 -->
                        <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="RadioEscritor" name="opcion" value="Escritor" required>
                        <label class="form-check-label" for="materialInline1">Escritor</label>
                        </div>

                        <!-- Material inline 2 -->
                        <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="RadioLector" name="opcion" value="Lector" required>
                        <label class="form-check-label" for="materialInline2">Lector</label>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-between">
                        <div class="col-sm-5">
                            <button id="btnCancelar" class="btn btn-danger" type="button" name="cancelar" onclick="location.href='index.php'">
                                <span class="fa fa-times"></span> Cancelar
                            </button>
                        </div>
                        <div class="col-sm-5" align="end">
                            <button id="btnSig" name="siguiente" class="btn btn-info text-center" type="submit">
                                Siguiente
                                <span class="fa fa-arrow-right"></span> 
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    include '../templates/footer.php';
?>
