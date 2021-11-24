<?php
    include 'templates/header.php';
?>
<div class="container-fluid">
        <h1 style="text-align: center; font-weight: bold; color:black;">Términos y condiciones de uso</h1>
        <div class="jumbotron w-50 mx-auto bg-dark" >
            <div class="row justify-content-center">
                <h4 class="col-sm-10 text-white">Está prohibido publicar un artículo que ya ha sido publicado con otro nombre y en caso 
                de realizar está acción será sancionado o suspendido y al no aceptar estás condiciones 
                deberá abstenerse de usar la plataforma.</h4>
                <div class="col-sm-10" style="padding-top:20px">
                    <button id="btnRegresar" class="btn btn-danger" type="button" name="regresar" onclick="location.href='RegistroEscritor.php'">
                        <span class="fa fa-arrow-left"></span> Regresar
                    </button>
                </div>
            </div>
            
            
        </div>
</div>
<?php
    include 'templates/footer.php';
?>