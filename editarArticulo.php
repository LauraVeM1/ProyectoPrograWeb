<?php require_once 'templates/header.php'?>
<?php 
    $art = $_GET["idedit"];
?>
<div class="container-fluid p-5">

    <div class="edit-art text-center">
    <div class="text-justify"><a class="btn-brown" href="escritorHome.php"><i class="fa fa-arrow-left"></i> Regresar</a></div>
        <h2>Editar Artículo</h2>
        <form method="post" action="edit.php">
            <div class="form-row">
                <?php
                    include "includes/dbcon.php";
                    $query_pag_data = "SELECT * FROM articulo WHERE id_articulo = ".$art." ";
                    $result_pag_data = mysqli_query($conn, $query_pag_data);
                    while ($row = mysqli_fetch_assoc($result_pag_data)) {
                        $id_art = $row['id_articulo'];
                        $tema = $row['tema'];
                        $subtema = $row['subtema'];
                        $contenido = $row['contenido'];
                        $img = $row['imagen'];
                    }
                ?>
                <div class="form-group col-md-4">
                <label class="lead">Tema</label><br>
                <input id="art" name="idart" type="text" value="<?php echo $id_art; ?>" style="display: none;">
                <select class="text-dark sel-img" name="tema" id="tema">
                    <option value="America">America</option>
                    <option value="Asia">Asia</option>
                    <option value="Europa del este">Europa del este</option>
                    <option value="Europa del oeste">Europa del oeste</option>
                </select>
                </div>
                <div class="form-group col-md-4">
                <label class="lead">Subtema</label><br>
                <input id="subtema" name="subtema" placeholder="Subtema" type="text" value="<?php echo $subtema; ?>" required>
                </div>
                    <div class="form-group col-md-4">
                    <label class="lead">Imagen</label>
                    <select class="text-dark sel-img" name="imagen" id="select_imagen">
                        <option value="img1.jpg">1</option>
                        <option value="img2.jpg">2</option>
                        <option value="img3.jpg">3</option>
                        <option value="img4.jpg">4</option>
                        <option value="img5.jpg">5</option>
                    </select><br>
                    <div>
                    <img id="img-articulo" src="<?php echo $img; ?>" alt="">
                    <script>
                        $(document).ready(function() {
                            $("#select_imagen").change(function() {
                                imagen = $(this).val();
                                ruta = "img/"+imagen;
                                $('#img-articulo').prop("src",ruta);
                            });
                        });
                    </script>
                    </div>
                    </div>
            </div>
            <div>
                <p><textarea class="text-area" name="contenido" placeholder="" required><?php echo $contenido; ?></textarea></p>
            </div>
            
            <input class="btn-esc" type="submit" value="Guardar">
        </form>
        
    </div>
</div>

<?php require_once 'templates/footer.php'?>


