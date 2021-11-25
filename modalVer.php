<div class="modal fade" data-backdrop="static" data-keyboard="false" id="ver<?php echo $row['id_comentario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #a06c3f !important;">
                <h6 class="modal-title" style="color: #fff; text-align: center;">
                    Artículo # <?php echo $row['id_articulo']; ?> <br>
                    Autor: <?php echo $row['nomA'] . ' ' . $row['apeA']; ?>
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id="cont_modal" style="height: 500px; width: 100%; overflow-y: auto;">
                <div class="form-group">
                    <label style="color: black; font-weight: bold;" for="recipient-name" class="col-form-label">Tema: </label>
                    <span style="color: black;"><?php echo $row['tema']; ?> </span> <br>
                    <label style="color: black; font-weight: bold;" for="recipient-name" class="col-form-label">Subtema: </label>
                    <span style="color: black;"><?php echo $row['subtema']; ?> </span>
                </div>
                <div class="form-group">
                    <img src="<?php echo $row['imagen']; ?>" alt="Imagen" class="mx-auto d-block">
                </div>
                <div class="form-group">
                    <label style="color: black; font-weight: bold;" for="recipient-name" class="col-form-label">Contenido del articulo: </label> <br>
                    <p class="text-justify" style="color: black;"><?php echo $row['conA']; ?> </p>
                </div>
                <div class="form-group">
                    <label style="color: black; font-weight: bold;" for="recipient-name" class="col-form-label">Comentario: </label> <br>
                    <p class="text-justify" style="color: black;"><?php echo $row['contenido']; ?> </p>

                    <label style="color: black; font-weight: bold; float: right;" for="recipient-name" class="col-form-label">Fecha: <span style="color: black; font-weight: normal;"> <?php echo $row['fecha']; ?> </span></label> <br>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn" style="background-color: #b88b5c; color: white;" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>