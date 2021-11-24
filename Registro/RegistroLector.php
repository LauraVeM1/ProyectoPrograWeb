<?php include '../templates/header.php';
$email=$_GET['email'];
$pass=$_GET['pass'];?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <i class="fa fa-book fa-4x center"style="color:black;"></i>
    </div>
    <h3 class="display text-center"style="color:black;">Regístrate a GuerraBlog</h3>
    <br>
    <div class="jumbotron w-50 mx-auto bg-dark" >
        <form method="post" action="<?php echo "../Registro/insrLector.php?email=".$email."&pass=".$pass ?>" id="formSignUp" name="formSignUp">
            <div class="row">
                <div class="col">
                    <h5 align="left">Nombre</h5>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text fa fa-user" id="nombre"></span>
                        </div>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese nombre" required>
                    </div>
                    <br>
                    <h5 align="left">Apellido</h5>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text fa fa-user" id="apellido"></span>
                        </div>
                        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese apellido" required>
                    </div>
                    <br>
                    <h5 align="left">Edad</h5>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text fa fa-hashtag" id="edad"></span>
                        </div>
                        <select name="edad" id="edad" class="form-control select-picker" placeholder="Seleccione edad" required>
                            <option class="text-dark"value="'0'" required >Seleccione edad</option>
                            <?php
                            for($i=1;$i<=100;$i++){
                                echo'<option class="text-dark"value="'.$i.'">'.$i.'</option>';
                            }
                                ?>
                        </select>
                    </div>
                    <br>
                    <br>
                    <h5 align="left">Temas de interés</h5>
                    <div class="input-group mb-4" required>
                        <?php
                        include '../templates/dbcon.php';
                            $sql=$con->query("SELECT * FROM articulo INNER JOIN usuario
                            ON articulo.id_autor=usuario.id_usuario
                            WHERE estatus_articulo ='Publicado'");
                            while($mostrar =mysqli_fetch_array($sql)){
                                $tema= $mostrar['tema'];
                                echo '<div class="col-sm-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" class="temas" type="checkbox" name="temas" id="'.$tema.'" value="'.$tema.'">
                                            <label class="form-check-label" for="tema"> '.$mostrar['tema'].'</label>
                                        </div>
                                    </div>';
                            }
                        ?>
                    </div>
                    <br>
                    <div class="input-group mb-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="terminos" id="terminos" value="terminos" required/>
                            <a href="<?php echo "../Registro/terminosLector.php?email=".$email."&pass=".$pass ?>"class="form-check-label" for="terminos">Términos y condiciones de uso</a>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-between">
                        <div class="col-sm-5">
                            <button id="btnRegresar" class="btn btn-danger" type="button" name="regresar" onclick="location.href='../Registro/Registro.php'">
                                <span class="fa fa-arrow-left"></span> Regresar
                            </button>
                        </div>
                        <div class="col-sm-5" align="end">
                            <button id="btnIni" name="submit" class="btn btn-info text-center" type="submit">
                                Guardar
                            </button>
                        </div>
                    </div>
                    <?php if(!empty($message)):?>
                         <p><?= $message ?></p>
                         <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../templates/footer.php';?>