<?php
    include 'templates/header.php';
?>
<div class="container-fluid">
    <h2 style="font-weight: bold; color:black;">
        Categorías
    </h2>
        <div class="row">
        <?php
                $sql=$con->query("SELECT * FROM articulo INNER JOIN usuario 
                ON articulo.id_autor=usuario.id_usuario 
                WHERE estatus_articulo ='Publicado'");
                while($mostrar =mysqli_fetch_array($sql)){
                    $tema= $mostrar['tema'];
                    echo '<div class="col-md-4">';
                      echo '<h5><strong><a name="tema" class="text-dark"href="ArticulosCategoria.php?id='.$tema.'"> ';
                                      echo $mostrar['tema'].'<br>';
                      echo '</a></h5>';
                    echo '</div>';
                }
        ?>
        </div>
  </div>
  <!-- <script>
    $(document).ready(function() {
      var my_var = "
      <?php 
      // echo ($_SESSION['datos']); 
      ?>
      ";
      var id_usuario = "
      <?php 
      // echo ($_SESSION['id_usuario']); 
      ?>
      ";
      localStorage.setItem("sesion", my_var);
      localStorage.setItem("id_usuario", id_usuario);
    });
  </script> -->
<?php
    include 'templates/footer.php';
?>