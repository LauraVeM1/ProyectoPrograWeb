<?php include "../UsuarioLector/header.php" ?>
<?php

$servidor = "localhost";
$usuarioBD = "root";
$pwBD = "";
$nomBd = "proyectoweb";
$db = mysqli_connect($servidor, $usuarioBD, $pwBD, $nomBd);

if (!$db) {
    die("La conexión falló" . mysqli_connect_error());
} else {
    mysqli_query($db, "SET NAMES 'UTF8'");
}
$sql1;
$busqueda = $_GET['search'];
if (isset($_GET['type'])) {
    $arr = array(1 => 'AMERICA', 2 => 'ASIA', 3 => 'ORIENTE');
    $sql1 = "SELECT * FROM ARTICULO WHERE lower(tema)=lower('$busqueda') AND estatus_articulo='publicado'";
} else {
    $sql1 = "SELECT * FROM ARTICULO where LOWER(subtema) LIKE LOWER('%$busqueda%') AND estatus_articulo='publicado'";
}
$sql1 = mysqli_query($db, $sql1);


?>
<?php if ($sql1->num_rows > 0) { ?>
    <h4 style="color: black;text-align: center; margin-top: 25px;">Artículos</h4>
    <div class="contenedor" id>
        <?php
        while ($filas = $sql1->fetch_assoc()) {
            /*estatus_articulo;
cambiar estatus usuario;
pendiente,inactivo, sancionado en 20;*/
            //ruta --img/img1.jpg
            //publicado no publicado
            //america asia europa del este europa del oeste
        ?>
            <div class="articulos" data-id="<?php echo $filas['id_articulo']; ?>">
                <div>
                    <img class="imgArt" src="..<?php echo $filas['imagen'] ?>" alt="">
                </div>
                <div>
                    Autor: Laura <br>Titulo: <?php echo $filas['subtema'] ?> <br> Fecha: <?php echo $filas['fecha_publicacion'] ?>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } else {
?>
    <h5 style="color: black; text-align: center;margin-top: 20px;margin-bottom: 20px; height: 400px; vertical-align: middle;">No hay articulos relacionados con su peticion</h5>
<?php } ?>
<?php
include '../templates/footer.php';
?>