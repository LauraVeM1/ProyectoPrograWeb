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
        <nav class="navbar navbar-expand-lg navbar-dark" height="60px" style="margin:0px; padding:10px;box-sizing:border-box; flex-direction: row!important;">
            <!-- Brand -->
            <a class="navbar-brand" href="#" style="margin:0px;">
                <img src="../img/Guerrablog.png" alt="logo" height="60px">
            </a>
            <div class="navbar-brand" style="width: max-content;">
                <h5> <i class="fa fa-user-circle" aria-hidden="true"></i>Bienvenido,<?php session_start(); echo $_SESSION['name'];?></h5>
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
                        <a id="btnInicio" href="../UsuarioLector/home.php" class="nav-link text-white">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a id="btnCategorias" href="#" class="nav-link text-white">Categorías</a>
                        <ul class="nav" style="position:absolute; z-index:1;">
                            <li id="categorias" class="nav-item categorias" ><a class="nav-link text-white" href="">America</a></li>
                            <li id="categorias" class="nav-item categorias" ><a class="nav-link text-white" href="">Asia</a></li>
                            <li id="categorias" class="nav-item categorias" ><a class="nav-link text-white" href="">Oriente</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a id="btnCategorias" href="../UsuarioLector/comentarios.php" class="nav-link text-white">Mis comentarios</a>
                    </li>
                </ul>
            </div>
            <form action="" class="form-inline my-2 my-lg-0" id="">
                <input type="search" id="busqArti" class="form-control mr-sm-2" style="margin-right: 10px;" placeholder="Buscar artículo" aria-label="Search">
                <button onclick="busqueda()" type="submit" class="btn btn-outline-success my-2 my-sm-0" style="color: white; border-color: white;">Buscar</button>
            </form>
        </nav>

    </header>