<?php include "../UsuarioLector/header.php"?>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../ImagenesArt/imgGuerra2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Segunda Guerra Munidal</h5>
                    <p>¿Cuáles fueron los antecedentes?</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../ImagenesArt/imgGuerra3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Crea comentarios</h5>
                    <p>Escribe un comentario en un artículo que sea de tu interés</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../ImagenesArt/imgFondo.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Elimina tus comentarios</h5>
                    <p>Borra tus comentarios si te equivocaste o no te agrada</p>
                </div>
            </div>
        </div>
        <button style="width: 45px;" class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button  style="width: 45px;" class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <?php
    include '../templates/footer.php';
    ?>