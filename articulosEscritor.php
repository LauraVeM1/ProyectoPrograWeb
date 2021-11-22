<?php require_once 'templates/header.php' ?>
<?php
    session_start();
?>
<script>
    function editA(){
        var id_articulo = $(this).attr("value");
        var string = id_articulo;
        $.post("index.php", {
            string: string
        }, function(data) {
            $("#displaymessage").html(data);
        });
    }
</script>
<div class="container-fluid py-5">
    <h1 class="titulos"><?php echo $_SESSION["user"]; ?>- Mis artículos</h1>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-3">
                <div class="card">
                <?php
                        include "includes/dbcon.php";
                        $query_pag_data = "SELECT * FROM articulo WHERE id_autor =1";
                        $result_pag_data = mysqli_query($conn, $query_pag_data);
                        while ($row = mysqli_fetch_assoc($result_pag_data)) {
                            $id_art = $row['id_articulo'];
                            $tema = $row['tema'];
                            $subtema = $row['subtema'];
                            $estatus = $row['estatus'];
                    ?>
                    <img class="card-img-top" src="" alt="IMG-CARD">
                    <div class="card-body">
                        <p class="card-text text-center">Tema: <?php echo $tema; ?></p>
                        <p class="card-text text-center">Subtema: <?php echo $tema; ?></p>
                        <button id="edit" onclick="editA()" class="btn-brown" value="<?php echo $id_art; ?>">Editar</button>
                        <button id="pub" class="btn-brown">Publicar</button>
                        <button id="delete" class="btn-brown">Eliminar</button>
                    </div>
                    <?php } ?>
                </div>
            </div>            
        </div>
    </div>
</div>

<?php require_once 'templates/footer.php' ?>