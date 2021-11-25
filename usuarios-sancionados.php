<?php
include("conexion.php");

$sql = "SELECT id_sancionado, nombre, apellido, correo, descripcion_sancion FROM sancionados ORDER BY id_sancionado";
$query = mysqli_query($conexion, $sql) or die("Problemas con la consulta");
$array = mysqli_fetch_array($query);

?>

<title>Usuarios sancionados</title>

<?php
include 'templates/header.php';
?>

<div class="container-fluid">
    <h1 style="text-align: center;">Auditor de comentarios</h1>
</div>

<div style="margin: 50px;">
    <h1 style="text-align: center; padding-top: 10px; color: black;">Usuarios sancionados</h1>
    <table class="table" id="comentarios" style="text-align: center;">
        <thead style="background-color: #a06c3f;">
            <tr>
                <th scope="col">Id sancionado</th>
                <th scope="col">Nombre completo</th>
                <th scope="col">Correo</th>
                <th scope="col">Descripcion de sanción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($query as $row) { ?>
                <tr>
                    <th> <?php echo $row['id_sancionado']; ?> </th>
                    <td> <?php echo $row['nombre'] . ' ' . $row['apellido'];  ?></td>
                    <td> <?php echo $row['correo']; ?></td>
                    <td> <?php echo $row['descripcion_sancion']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include 'templates/footer.php';
?>