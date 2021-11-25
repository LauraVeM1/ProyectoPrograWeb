<?php
    include 'templates/header.php';
?>
<div class="container-fluid">
    <h2 style="font-weight: bold; color:black;">
        Artículos
    </h2>
    <br>
    <div class="row">
        <?php
            $sql=$con->query("SELECT * FROM articulo INNER JOIN usuario 
            ON articulo.id_autor=usuario.id_usuario 
            WHERE estatus_articulo ='Publicado'");
            while($mostrar =mysqli_fetch_array($sql)){
                $id = $mostrar['id_articulo'];
                echo '<div class="col-md-4">';
                echo '<a href="Articulo.php?id='.$id.'"> ';
                    echo'<div class="row justify-content-center">';
                        
                            echo '<div class="col-md-4">';
                                echo "<img src='".$mostrar['imagen']."' width='100%'>";
                            echo '</div>';
                            echo '<div class="col-md-6 text-dark">';
                                echo $mostrar['subtema'].'<br>';
                                echo $mostrar['tema'].'<br>';
                                echo $mostrar['nombre'].'&nbsp';
                                echo $mostrar['apellido'].'<br>';
                                echo $mostrar['fecha'].'<br>';
                            echo '</div>';
                        
                    echo '</div>';
                echo '</a>';
                echo '</div>';
            }
        ?>
    </div>
    
</div>
<?php
    include 'templates/footer.php';
?>