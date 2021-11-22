<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuerraBlog</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script rel="stylesheet" src="../css/estiloUsuarioL.css"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" height="60px" style="margin:0px; padding:10px;">
            <!-- Brand -->
            <a class="navbar-brand" href="#" style="margin:0px;">
                <img src="../img/Guerrablog.png" alt="logo" height="60px">
            </a>
            <div>
                <i class="fa fa-user-circle" aria-hidden="true"></i>Nombre de usuario
            </div>
        </nav>
        <hr style="background-color:white; margin-bottom: 2px; margin-top: 2px;">

        <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsa">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="colapsa">
                <ul class="nav">
                    <li class="nav-item">
                        <a id="btnInicio" href="#" class="nav-link text-white">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a id="btnCategorias" href="#" class="nav-link text-white">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a id="btnCategorias" href="#" class="nav-link text-white">Mis comentarios</a>
                    </li>
                </ul>
            </div>
            <form action="" class="form-inline" id="">
                <input type="search" class="form-control nr-sm-auto" style="margin-right: 10px;" placeholder="Buscar artículo" aria-label="Search">
                <button type="submit" class="btn btn-outline-success my-2 my-sm-0" style="color: white; border-color: white;">Buscar</button>
            </form>
        </nav>

    </header>
    <!--     CODIGO PARA MOSTRAR ARTICULOS
    <div class="contenedor">
        <div class="articulos">
            <div >
                <img class="imgArt" src="../ImagenesArt/guerra1.jpg" alt="">
            </div>
            <div>
                Autor: Laura <br>Titulo: El maravilloso mundo deeeeee <br> Fecha: 25/11/2021
            </div>
        </div>
        <div class="articulos">
            <div >
                <img class="imgArt" src="../ImagenesArt/guerra1.jpg" alt="">
            </div>
            <div>
                Autor: Laura <br>Titulo: El maravilloso mundo deeeeee <br> Fecha: 25/11/2021
            </div>
        </div>
        <div class="articulos">
            <div >
                <img class="imgArt" src="../ImagenesArt/guerra1.jpg" alt="">
            </div>
            <div>
                Autor: Laura <br>Titulo: El maravilloso mundo deeeeee <br> Fecha: 25/11/2021
            </div>
        </div>
        <div class="articulos">
            <div >
                <img class="imgArt" src="../ImagenesArt/guerra1.jpg" alt="">
            </div>
            <div>
                Autor: Laura <br>Titulo: El maravilloso mundo deeeeee <br> Fecha: 25/11/2021
            </div>
        </div>
    </div> 
 -->
    <div class="cajaArticulo">
        <div class="contenidoArticulo">
            <h1 class="tituloArt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ratione accusamus quisquam</h1>
        </div>
        <div class="seccionCom">
            <div class="contenidoComentarios ">
                <div class="bloqueCom">
                    <h3 style="color: black;">Comentarios</h3>
                </div>
                <div class="comentario">
                    <p class="autorComen">Laura Vega Mondragon</p>
                    <p class="fechaComen">25/11/2021</p>
                    <p class="contenidoComen">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero asperiores sapiente dolore cumque nulla neque quas exercitationem recusandae blanditiis temporibus, eos quod </p>
                </div>
                <div class="comentario">
                    <p class="autorComen">Laura Vega Mondragon</p>
                    <p class="fechaComen">25/11/2021</p>
                    <p class="contenidoComen">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero asperiores sapiente dolore cumque nulla neque quas exercitationem recusandae blanditiis temporibus, eos quod </p>
                </div>
                <div class="comentario">
                    <p class="autorComen">Laura Vega Mondragon</p>
                    <p class="fechaComen">25/11/2021</p>
                    <p class="contenidoComen">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero asperiores sapiente dolore cumque nulla neque quas exercitationem recusandae blanditiis temporibus, eos quod </p>
                </div>
                <div class="comentario">
                    <p class="autorComen">Laura Vega Mondragon</p>
                    <p class="fechaComen">25/11/2021</p>
                    <p class="contenidoComen">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero asperiores sapiente dolore cumque nulla neque quas exercitationem recusandae blanditiis temporibus, eos quod </p>
                </div>
                <div class="comentario">
                    <p class="autorComen">Laura Vega Mondragon</p>
                    <p class="fechaComen">25/11/2021</p>
                    <p class="contenidoComen">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero asperiores sapiente dolore cumque nulla neque quas exercitationem recusandae blanditiis temporibus, eos quod </p>
                </div>
            </div>
            <div class="escribirCom">
                <form action="">
                <input type="text" name="comentario" id="comentario" placeholder="Agrega un comentario" style="width: 75%;">
                <button type="submit" class="btn btn-outline-light" style="border: 1px solid black; border-radius: 50%;"><i class="fa fa-paper-plane"  style="color: black;"></i></button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include '../templates/footer.php';
    ?>