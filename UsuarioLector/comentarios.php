<?php include "../UsuarioLector/header.php" ?>
<h4 style="color: black; text-align: center;margin-top: 20px;">Mis comentarios</h4>

<?php
if (isset( $_SESSION['aut'])) {
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
    $correo = $_SESSION['correo'];
    $sql1 = "SELECT * FROM COMENTARIOS where id_usuario=(SELECT id_usuario FROM USUARIO where correo='$correo') ORDER BY fecha";
    $sql1 = mysqli_query($db, $sql1);
    if($sql1->num_rows>0){
?>
    <table class="table table-sm " style="margin: 20px; width: 85%;">
        <thead>
            <tr class="table-active">
                <th class="celdaCom" scope="col" style="color: brown;">Fecha</th>
                <th class="celdaCom" scope="col" style="color: brown;">Artículo</th>
                <th class="celdaCom" scope="col" style="color: brown;">Comentario</th>
                <th class="celdaCom" scope="col" style="color: brown;">Acción</th>
            </tr>
            <?php
           

            while ($fila = $sql1->fetch_assoc()) {
            ?>
                <tr class="table-primary" data-id="<?php echo $fila['id_comentario']?>">
                    <th class="celdaCom"><?php echo $fila['fecha'] ?></th>
                    <th class="celdaCom"><?php $id_art=$fila['id_articulo']; $sql2="SELECT subtema FROM articulo WHERE id_articulo=$id_art"; $sql2=mysqli_query($db,$sql2)->fetch_assoc();echo $sql2['subtema']?></th>
                    <th class="celdaCom"><?php echo $fila['contenido'] ?></th>
                    <th class="celdaCom"><button type="button" class="btn btn-link btnClic" style="border: 1px solid black; border-radius: 50%;background-color: white;"><i style="color: black;" class="fa fa-trash"></i></button></th>
                </tr>
                <!--  <tr class="table-success">
                    <th class="celdaCom">11/02/2021</th>
                    <th class="celdaCom">El ejercito Nazi</th>
                    <th class="celdaCom">Ola</th>
                    <th class="celdaCom"><button type="button" class="btn btn-link btnClic" style="border: 1px solid black; border-radius: 50%;background-color: white;"><i style="color: black;" class="fa fa-trash"></i></button></th>
                </tr>-->
            <?php
            }
        
        } else {
            ?>
            <h4 style="color:red;text-align: center;border: 1px solid red;">Todavia no realizas algun comentario</h4>
        <?php
        }
    }else{
        ?>
         <h4 style="color:red;text-align: center;border: 1px solid red;">Necesitas iniciar sesion</h4>
 <?php   }
        ?>
        </thead>
    </table>
    <script>
        function muestraMensaje() {
            alert("has presionado el boton")
        }
        $(".btnClic").click(function (e) { 
            $valores = $(this).parents("tr");
            var idG = ($($valores).attr("data-id"));
            $.ajax({
                type: "get",
                url: "../Scripts/eliminar.php",
                data: {'id_com':idG},
                dataType: "json",
                success: function (response) {
                    
                }
            });
            $($valores).html("");
            
        });
    </script>
    <?php
    include '../templates/footer.php';
    ?>