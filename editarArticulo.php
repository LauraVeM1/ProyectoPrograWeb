<?php require_once 'templates/header.php'?>

<div class="container-fluid p-5">
    <div class="edit-art text-center">
        <h2>Editar Artículo</h2>
        <form method="post" action="insertarArticulo.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label class="lead">Tema</label><br>
                <input id="tema" name="tema" placeholder="Tema" type="text" value="" required>
                </div>
                <div class="form-group col-md-6">
                <label class="lead">Subtema</label><br>
                <input id="subtema" name="subtema" placeholder="Subtema" type="text" value="" required>
                </div>
            </div>
            <div>
                <p><textarea class="text-area" name="contenido" placeholder="" required></textarea></p>
            </div>
            
            <input class="btn-esc" type="submit" value="Guardar">
        </form>
    </div>
</div>

<?php require_once 'templates/footer.php'?>


