<?php require_once 'templates/header.php' ?>
<?php
    session_start();
?>
<div class="edit-art text-center">
    <h2 class="titulos">Crear Artículo</h2>
    <form method="post" action="includes/add.php">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label class="lead">Tema</label><br>
                <input id="tema" name="tema" placeholder="Tema" type="text" value="" required>
            </div>
            <div class="form-group col-md-4">
                <label class="lead">Subtema</label><br>
                <input id="subtema" name="subtema" placeholder="Subtema" type="text" value="" required>
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
                <img id="img-articulo" src="img/img1.jpg" alt="">
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
            <p><textarea class="text-area" name="contenido" placeholder="" required></textarea></p>
        </div>
        <input class="btn-esc" type="submit" value="Crear">
    </form>
</div>

<?php require_once 'templates/footer.php' ?>