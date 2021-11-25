<?php
include("conexion.php");

$sql = "SELECT u.correo, a.id_articulo, a.contenido as 'conA', c.id_comentario, u.id_usuario as 'pp', u.nombre, u.apellido, a.tema, a.subtema, a.imagen, c.fecha, c.contenido, uu.nombre as 'nomA', uu.apellido as 'apeA' FROM usuario u, comentarios c, articulo a, usuario uu WHERE a.id_articulo = c.id_articulo AND u.id_usuario = c.id_usuario AND uu.id_usuario = a.id_autor AND c.estatus = 'inactivo' ORDER BY c.id_comentario";
$query = mysqli_query($conexion, $sql) or die("Problemas con la consulta");
$array = mysqli_fetch_array($query);

?>

<title>Auditor Comentarios</title>

<?php
include 'templates/header.php';
?>

<div class="container-fluid">
    <h1 style="text-align: center;">Auditor de comentarios</h1>
</div>

<a href="auditor-escritores.php" class="enlace"> Auditar Escritores </a>
<a href="usuarios-sancionados.php" class="enlace"> Ver usuarios sancionados </a>

<div style="margin: 50px;">
    <h1 style="text-align: center; padding-top: 10px; color: black;">Comentarios por revisar</h1>
    <table class="table" id="comentarios" style="text-align: center;">
        <thead style="background-color: #a06c3f;">
            <tr>
                <th scope="col">Id Comentario</th>
                <th scope="col">Nombre del que comento</th>
                <th scope="col">Tema del articulo</th>
                <th scope="col">Subtema del articulo</th>
                <th scope="col">Fecha</th>
                <th scope="col">Comentario</th>
                <th scope="col">Ver</th>
                <th scope="col">Eleccion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($query as $row) { ?>
                <tr>
                    <th> <?php echo $row['id_comentario']; ?> </th>
                    <td> <?php echo $row['nombre'] . ' ' . $row['apellido'];  ?></td>
                    <td> <?php echo $row['tema']; ?></td>
                    <td> <?php echo $row['subtema']; ?></td>
                    <td> <?php echo $row['fecha']; ?></td>
                    <td>
                        <pre class="d-inline-block text-truncate" style='font-family: "Nunito"; color: black; font-size: 16px; padding: 12px; max-width: 550px;'><?php echo $row['contenido']; ?> </pre>
                    </td>
                    <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ver<?php echo $row['id_comentario']; ?>" role="button"> Ver detalles</button> </td>
                    <td>
                        <button type="button" class="btn btn-success" onclick="aceptar(<?php echo $row['id_comentario']; ?>)" role="button"> Aceptar</button>
                        <button type="button" class="btn btn-danger" style="margin-top: 10px;" data-toggle="modal" data-target="#rechazar<?php echo $row['id_comentario']; ?>" role="button"> Rechazar</button>
                    </td>
                </tr>
                <?php include("modalVer.php") ?>
                <?php include("modalRechazar.php") ?>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function aceptar(idComen) {
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