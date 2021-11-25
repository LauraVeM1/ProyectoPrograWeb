<?php
include("conexion.php");

$sql = "SELECT id_usuario, nombre, apellido, rfc, correo, edad, telefono, referencias FROM usuario WHERE estatus = 'inactivo' AND id_rol = 1 ORDER BY id_usuario";
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
                        <button type="button" class="btn btn-success" onclick="si(<?php echo $row['id_usuario']; ?>)" role="button">Si</button>

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#nou<?php echo $row['id_usuario']; ?>" role="button">No</button>
                    </td>
                </tr>
                <?php include("modalNo.php") ?>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function si(idEscritor) {
        $.ajax({
            url: "aceptarSi.php", //This is the current doc
            type: "POST",
            dataType: "json",
            data: {
                idEsc: idEscritor,
            }
        });
        alert("Se acepto el escritor.");
        window.location = 'auditor-escritores.php';
    }
</script>

<?php
include 'templates/footer.php';
?>