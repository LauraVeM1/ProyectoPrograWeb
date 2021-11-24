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
    $sql1 = "SELECT * FROM ARTICULO WHERE lower(tema)=lower('$busqueda')";
} else {
    $sql1 = "SELECT * FROM ARTICULO where LOWER(subtema) LIKE LOWER('%$busqueda%')";
    
}
$sql1 = mysqli_query($db, $sql1);


?>
<div class="contenedor">
    <?php
    while ($filas = $sql1->fetch_assoc()) {
/*estatus_articulo;
cambiar estatus usuario;
pendiente,inactivo, sancionado en 20;*/
//ruta --img/img1.jpg
//publicado no publicado
//america asia europa del este europa del oeste
    ?>
        <div class="articulos"  data-id="<?php echo $filas['id_articulo'];?>" >
            <div>
                <img class="imgArt" src="../ImagenesArt/<?php echo $filas['imagen'] ?>" alt="">
            </div>
            <div>
                Autor: Laura <br>Titulo: <?php echo $filas['subtema'] ?> <br> Fecha: <?php echo $filas['fecha'] ?>
            </div>
        </div>
    <?php } ?>

</div>
<?php
include '../templates/footer.php';
?>