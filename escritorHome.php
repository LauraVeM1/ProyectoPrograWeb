<?php require_once 'templates/header.php' ?>
<?php
    session_start();
    $_SESSION["iduser"] = $_SESSION['idLogin'];
?>
<div class="container-fluid p-5">
    <div class="container text-center">
        <div class="pt-5 pb-5 esc-home">
            <figure><img src="img/user.png" alt="User"></figure>
            <h2 class="m-0">Bienvenido</h2>
            <h3>
                <?php 
                    include "includes/dbcon.php";
                    $query_pag_data = "SELECT nombre FROM usuario";
                    $result_pag_data = mysqli_query($conn, $query_pag_data);
                    while ($row = mysqli_fetch_assoc($result_pag_data)) {
                        $nombre = $row['nombre'];
                    }
                    echo $nombre;
                    $_SESSION["user"]=$nombre;
                ?>       
            </h3>
            <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 mb-5">
                    <a href="articulosEscritor.php" class="btn-esc">Mis artículos</a>
                </div>
                <div class="col-md-6 mt-5 mb-5">
                <a href="#" class="btn-esc"><i class="fa fa-plus-circle"></i>Crear artículo</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'templates/footer.php' ?>