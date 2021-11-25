<div class="modal fade" data-backdrop="static" data-keyboard="false" id="nou<?php echo $row['id_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #a06c3f !important;">
                <h6 class="modal-title" style="color: #fff; text-align: center;">
                    Porfavor escriba un mensaje, comentario u observación para el escritor <?php echo $row['nombre'] . ' ' . $row['apellido']; ?>
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id="cont_modal" style="min-height: 300px;">
                <div class="form-group">
                    <textarea style="color: black;" id=" my-textarea" class="form-control" name="txt" rows="15" cols="50" placeholder="Comentarios y/o observaciones"></textarea>
                </div>
                <div class="modal-footer">
                    <button onclick="no(<?php echo $row['id_usuario']; ?>)" type="button" class="btn" style="background-color: #b88b5c; color: white;">Enviar</button>

                    <button type="button" class="btn" style="background-color: #b88b5c; color: white;" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function no(idEscrito) {
        $.ajax({
            url: "aceptarNo.php", //This is the current doc
            type: "POST",
            dataType: "json",
            data: {
                idEscri: idEscrito,
            }
        });
        alert("Se enviaron los comentarios y/o observaciones al escritor.");
        window.location = 'auditor-escritores.php';
    }
</script>