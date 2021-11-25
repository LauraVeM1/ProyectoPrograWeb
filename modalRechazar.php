<div class="modal fade" data-backdrop="static" data-keyboard="false" id="rechazar<?php echo $row['id_comentario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #a06c3f !important;">
                <h6 class="modal-title" style="color: #fff; text-align: center;">
                    Elija la sanción que recibira el usuario que comento <br>
                    En cualquiera de las 2 opciones, se elimina el comentario
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id="cont_modal" style="height: 200px;">
                <div class="form-group">
                    <label style="color: black; font-weight: bold;" for="recipient-name" class="col-form-label">Suspender cuenta: </label>
                    <span style="color: black;"> La cuenta cambia de estatus de activa a inactiva por un determinado tiempo. </span> <br>
                    <label style="color: black; font-weight: bold;" for="recipient-name" class="col-form-label">Eliminar cuenta: </label>
                    <span style="color: black;"> La cuenta se elimina definitivamente. </span>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn" style="background-color: #b88b5c; color: white;" onclick="suspender(<?php echo $row['id_comentario']; ?>, <?php echo $row['pp']; ?>, '<?php echo $row['nombre']; ?>', '<?php echo $row['apellido']; ?>', '<?php echo $row['correo']; ?>')">Suspender cuenta</button>

                    <button onclick="eliminar(<?php echo $row['pp']; ?>, <?php echo $row['id_comentario']; ?>, '<?php echo $row['nombre']; ?>', '<?php echo $row['apellido']; ?>', '<?php echo $row['correo']; ?>')" type="button" class="btn" style="background-color: #b88b5c; color: white;">Eliminar cuenta</button>

                    <button type="button" class="btn" style="background-color: #b88b5c; color: white;" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function suspender(idC, idU, no, ap, c) {
        $.ajax({
            url: "update.php", //This is the current doc
            type: "POST",
            dataType: "json",
            data: {
                idUser: idU,
                idCom: idC,
                nomb: no,
                apel: ap,
                corre: c,
            }
        });
        alert("Se suspendio la cuenta con id " + idU + " correctamente");
        window.location = 'auditor-comentarios.php';
    }

    function eliminar(iddU, iddC, nombre, apellido, correo) {
        $.ajax({
            url: "delete.php", //This is the current doc
            type: "POST",
            dataType: "json",
            data: {
                idUse: iddU,
                idCo: iddC,
                nom: nombre,
                ape: apellido,
                co: correo,
            }
        });
        alert("Se elimino permanentemente la cuenta con id " + iddU + " correctamente");
        window.location = 'auditor-comentarios.php';
    }
</script>