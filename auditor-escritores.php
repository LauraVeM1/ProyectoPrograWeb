<?php
include("conexion.php");

$sql = "SELECT id_usuario, nombre, apellido, rfc, correo, edad, telefono, referencias FROM usuario WHERE estatus = 'inactivo' ORDER BY id_usuario";
$query = mysqli_query($conexion, $sql) or die("Problemas con la consulta");
$array = mysqli_fetch_array($query);

?>

<!--  nombre y apellidos, RFC, edad, dirección, teléfono, referencias de artículos escritos en otros blog o revistas -->

<title>Auditor de escritores</title>

<?php
include 'templates/header.php';
?>

<div class="container-fluid">
    <h1 style="text-align: center;">Auditor de escritores</h1>
</div>

<a href="auditor-comentarios.php" class="enlace" style="float: left; margin-left: 20px;"> Regresar a auditar comentarios </a>

<div style="margin: 50px;">
    <h1 style="text-align: center; padding-top: 10px; color: black;">Escritores por revisar</h1>
    <table class="table" id="comentarios" style="text-align: center;">
        <thead style="background-color: #a06c3f;">
            <tr>
                <th scope="col">Id usuario</th>
                <th scope="col">Nombre completo</th>
                <th scope="col">RFC</th>
                <th scope="col">Correo</th>
                <th scope="col">Edad</th>
                <th scope="col">Telefono</th>
                <th scope="col">Referencias</th>
                <th scope="col">¿Aceptar?</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($query as $row) { ?>
                <tr>
                    <th> <?php echo $row['id_usuario']; ?> </th>
                    <td> <?php echo $row['nombre'] . ' ' . $row['apellido'];  ?></td>
                    <td> <?php echo $row['rfc']; ?></td>
                    <td> <?php echo $row['correo']; ?></td>
                    <td> <?php echo $row['edad']; ?></td>
                    <td> <?php echo $row['telefono']; ?></td>
                    <td>
                        <pre style='font-family: "Nunito"; color: black; font-size: 16px;'><?php echo $row['referencias']; ?> </pre>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success" onclick="aceptar(<?php echo $row['id_usuario']; ?>)" role="button"> Si</button>

                        <button type="button" class="btn btn-danger" onclick="aceptar(<?php echo $row['id_usuario']; ?>)" role="button"> No</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function si(idComen) {
        $.ajax({
            url: "aceptar.php", //This is the current doc
            type: "POST",
            dataType: "json",
            data: {
                idUser: idComen,
            }
        });
        alert("Se acepto el comentario del usuario correctamente");
        window.location = 'auditor-comentarios.php';
    }

    function no(idComen) {
        $.ajax({
            url: "aceptar.php", //This is the current doc
            type: "POST",
            dataType: "json",
            data: {
                idUser: idComen,
            }
        });
        alert("Se acepto el comentario del usuario correctamente");
        window.location = 'auditor-comentarios.php';
    }
</script>

<?php
include 'templates/footer.php';
?>