<?php include "../UsuarioLector/header.php";


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
$busqueda = $_GET['art'];
$sql1 = "SELECT * FROM ARTICULO WHERE id_articulo=$busqueda";

$sql1 = mysqli_query($db, $sql1);
$fila=$sql1->fetch_assoc();
$autor=$fila['id_autor'];
$sql2="SELECT nombre FROM USUARIO where id_usuario=$autor";
$sql2=mysqli_query($db,$sql2)->fetch_assoc();
?>
    <div class="cajaArticulo">
        <div class="contenidoArticulo">
            <h1 class="tituloArt"><?php echo $fila['subtema']?></h1>
            <p class="nombreGris">Autor:<?php echo $sql2['nombre']?></p>
            <p class="nombreGris">Publicacion: <?php echo $fila['fecha_publicacion']?></p>
            <div class="contenidowIxT">
                <p><img align="left" src="..<?php echo $fila['imagen']?>"  alt="" class="imgTexto"><?php echo $fila['contenido']?></p>
            </div>
        </div>
        <div class="seccionCom">
            <div class="contenidoComentarios ">
                <div class="bloqueCom">
                    <h3 style="color: black;">Comentarios</h3>
                </div>
                <?php $sql3="SELECT * FROM COMENTARIOS WHERE id_articulo=$busqueda";
                $sql3=mysqli_query($db,$sql3);
                while($datos=$sql3->fetch_assoc()){
                ?>
                <div class="comentario">
                    <p class="autorComen"><?php $iduser=$datos['id_usuario']; $sql4="SELECT nombre,apellido FROM usuario WHERE id_usuario=$iduser";$sql4=mysqli_query($db,$sql4)->fetch_assoc();echo $sql4['nombre']." ".$sql4['apellido']?></p>
                    <p class="fechaComen"><?php echo $datos['fecha'] ?></p>
                    <p class="contenidoComen"><?php echo $datos['contenido']?></p>
                </div>
               <?php }?>
            </div>
            <div class="escribirCom">
                <div>
                    <input type="text" name="comentario" id="comentarioArti" placeholder="Agrega un comentario" style="width: 75%;">
                    <button onclick="agregaCom(<?php echo $busqueda ?>,'<?php echo $_SESSION['nombreUsuario'].' '.$_SESSION['apellido']?>')" type="submit" class="btn btn-outline-light" style="border: 1px solid black; border-radius: 50%;"><i class="fa fa-paper-plane" style="color: black;"></i></button>
                </div>
            </div>
        </div>
    </div>
    <?php
    include '../templates/footer.php';
    ?>