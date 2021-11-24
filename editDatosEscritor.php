<?php require_once 'templates/header.php' ?>

<?php
session_start();
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
    <div class="container text-center">
        <div class="pt-5 pb-5 esc-home">
            <figure><img style="max-width: 80px;" src="img/user.png" alt="User"></figure>
            <h1>Mis datos</h1>
            <form class="text-justify p-5" method="POST" action="">
                <div class="form-group">
                    <label class="lead" for="">Usuario: <?php echo $nombre . " " . $apellido ?></label>
                </div>
                <div class="form-group">
                    <label class="lead" for="">Correo: <?php echo $correo ?></label>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="lead" for="">Contraseña:</label>
                        </div>
                        <div class="col-md-4">
                            <input id="pass" required disabled type="password" value="<?php echo $pass ?>">
                        </div>
                        <div class="col-md-4">
                            <a id="btnPass" class="btn-brown">Cambiar</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="lead" for="">Dirección:</label>
                        </div>
                        <div class="col-md-4">
                            <input id="direccion" required disabled type="text" value="<?php echo $direccion ?>">
                        </div>
                        <div class="col-md-4">
                            <a id="btnDir" class="btn-brown">Cambiar</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                        <label class="lead" for="">Telefono:</label>
                        </div>
                        <div class="col-md-4">
                        <input id="telefono" required disabled type="text" value="<?php echo $telefono ?>">
                        </div>
                        <div class="col-md-4">
                            <a id="btnTel" class="btn-brown">Cambiar</a>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                    <input class="btn-brown" type="submit" value="Guardar">
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
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
