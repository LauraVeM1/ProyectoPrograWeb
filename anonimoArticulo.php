<?php
    include 'templates/header.php';
?>
<?php
    $id =$_GET["id"];
    $sql=$con->query("SELECT * FROM articulo INNER JOIN usuario 
    ON articulo.id_autor=usuario.id_usuario WHERE id_articulo= $id");

    $comentario=$con->query("SELECT * FROM comentarios INNER JOIN articulo
    ON comentarios.id_articulo=articulo.id_articulo
    INNER JOIN usuario ON comentarios.id_usuario=usuario.id_usuario
    WHERE comentarios.id_articulo=$id");

    while ($mostrar = mysqli_fetch_array($sql)) {
        
    ?>
<div class="container-fluid">
    
    <div class="row">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-8">
                    <h1 style="font-weight: bold; color:black;">
                        <?php echo $mostrar['subtema'] ?>
                    </h1>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-4">
                    <h5 style="color:black; margin-bottom:0px"><?php echo $mostrar['nombre'].' '. $mostrar['apellido']?></h5>
                    <h5 style="color:black;">Publicación: <?php echo $mostrar['fecha'] ?></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <?php echo "<img src='".$mostrar['imagen']."' width='100%'>"; ?>
                </div>
                <div class="col-sm-7">
                    <h6 style="text-align: center; color:black;"><?php echo $mostrar['contenido'] ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron w-100 mx-auto bg-dark">
                <h3 style="font-weight: bold; color:white; text-align:center">Comentarios</h3>
                <hr>
                <div style="padding:0px" class="jumbotron w-100 mx-auto bg-dark" >
                    <?php
                        while ($mostrar = mysqli_fetch_array($comentario)) {
                            echo'<div style="padding:0px" class="jumbotron w-100 mx-auto border-dark bg-white"">
                                    <p style="margin:0px" class="text-dark">'.$mostrar['nombre'].' '.$mostrar['apellido'].'</p>
                                    <p style="margin:0px" class="text-info">'.$mostrar['fecha_comentario'].'</p>
                                    <p style="margin:0px" class="text-dark">'.$mostrar['contenido_comentario'].'</p>
                                </div>';
                        }
                    ?>
                </div>
                <input type="text" name="comentario" id="comentario" class="form-control" placeholder="Inicia sesión para comentar" disabled>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<?php
    include 'templates/footer.php';
?>