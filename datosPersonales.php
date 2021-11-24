<?php require_once 'templates/header.php' ?>

<?php
$idUsuario = $_SESSION["iduser"];
include "includes/dbcon.php";
$consulta = "SELECT * FROM usuario where id_usuario = $idUsuario";
$resultado = mysqli_query($conn, $consulta);
if ($resultado) {
    while ($row = $resultado->fetch_array()) {
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $correo = $row['correo'];
        $pass = $row['password'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
    }
}
?>

<div class="container-fluid">
    <div class="container text-center p-3">
        <div class="pt-5 pb-5 esc-home">
            <figure><img style="max-width: 80px;" src="img/user.png" alt="User"></figure>
            <h1>Mis datos</h1>
            <form class="text-justify p-5" method="POST" action="editDatosbk.php">
                <div class="form-group">
                    <label class="lead font-weight-bold" for="">Usuario: <?php echo $nombre . " " . $apellido ?></label>
                </div>
                <div class="form-group">
                    <label class="lead font-weight-bold" for="">Correo: <?php echo $correo ?></label>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="lead font-weight-bold" for="">Contraseña:</label>
                        </div>
                        <div class="col-md-4">
                            <input id="pass" name="pass" class="mb-3" title="6 Caracteres, Minimo: 1 Mayuscula, 1 numero, 1 minuscula" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$" required disabled type="password" value="<?php echo $pass ?>">
                        </div>
                        <div class="col-md-4">
                            <a id="btnPass" class="btn-brown">Cambiar</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="lead font-weight-bold" for="">Dirección:</label>
                        </div>
                        <div class="col-md-4">
                            <input id="direccion" class="mb-3" name="direccion" required disabled type="text" value="<?php echo $direccion ?>">
                        </div>
                        <div class="col-md-4">
                            <a id="btnDir" class="btn-brown">Cambiar</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                        <label class="lead font-weight-bold" for="">Telefono:</label>
                        </div>
                        <div class="col-md-4">
                        <input id="telefono" class="mb-3" name="telefono" maxlength="10" required disabled type="text" value="<?php echo $telefono ?>">
                        </div>
                        <div class="col-md-4">
                            <a id="btnTel" class="btn-brown">Cambiar</a>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                    <input id="enviar" class="btn-brown" type="submit" value="Guardar">
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#enviar").on("click",function () { 
            $("#pass").removeAttr('disabled');
            $("#direccion").removeAttr('disabled');
            $("#telefono").removeAttr('disabled');
        });
        $("#btnPass").on("click",function () { 
            $("#pass").removeAttr('disabled');
            
        });
        $("#btnDir").on("click",function () { 
            $("#direccion").removeAttr('disabled');
        });
        $("#btnTel").on("click",function () { 
            $("#telefono").removeAttr('disabled');
        });
});
</script>

<?php require_once 'templates/footer.php' ?>
