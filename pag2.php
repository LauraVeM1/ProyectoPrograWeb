<?php include 'includes/header.php'; ?>

<div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px; padding: 0px;">
    <h1 class="text-center" style="font-size: 90px; margin-bottom: 0px;">EXU3U4</h1>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: rgb(225, 174, 222); height: 70px; margin-top: 0px;">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <a class="nav-item nav-link active" style="color: white;" href="#"><i class="fa fa-home" aria-hidden="true"></i> </a>
        <a class="nav-item nav-link active" style="color: white;" href="#"><i class="fa fa-heart" aria-hidden="true"></i></i> Nosotros</a>
    </ul>
    <label class=" my-2 my-sm-0" style="border: none;margin-right: 10px;color: rgb(254,65,100);" type="submit"><i class="fa fa-users" aria-hidden="true"></i>
    <?php 
    $correo=$_GET["correo"]; 
    $nom="";
    for($i=0;$i<strlen($correo);$i++){
        if($correo[$i]=="@"){
            break;
        }
        $nom=$nom."".$correo[$i];
    }
    echo "Bienvenido,  ".$nom;
    $servidor = "localhost";
        $usuarioBD = "root";
        $pwBD = "";
   //     echo json_encode($sql1->fetch_all());
    ?>
</label>
<button class="btn btn-light my-2 my-sm-0" type="submit"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar sesion</button>
    </form>
</nav>
<div class="card mx-auto" style="width: 18rem; margin-top: 2rem;">
  <button class="btn btn-outline-success" id="Crear nuevo registro6">Crear/Nuevo</button>
</div>
<div class="row justify-content-center" style=" width: 100%;" id="tablaInv">
<?php  $nomBd = "ProgWeb";
        $db = mysqli_connect($servidor, $usuarioBD, $pwBD, $nomBd);
        if (!$db) {
            die("La conexión falló" . mysqli_connect_error());
        } else {
            mysqli_query($db, "SET NAMES 'UTF8'");
        }
        $sql1 = "SELECT * FROM ganancias ";
        $sql2="SELECT rol FROM USUARIOS WHERE login='$correo'";
        $sql1 = mysqli_query($db, $sql1);
       
        $sql2 = mysqli_query($db, $sql2);
      $agregaB="";
      $encabezado="";
      if(($sql2->fetch_assoc()['rol'])=='admin'){
        $agregaB="<td id=editar><button>Editar</button></td><td><button class=eliminar>Eliminar</button></td>";  
        $encabezado="<th>Editar</th><th>Eliminar</th>";   
      }else{
          $agregaB="<td id=\"ver\"><button>Ver</button></td>";
        $encabezado="<th>Ver</th>";
      }
     
      if( mysqli_num_rows($sql1)>0){
        echo " <table class=\"table table-hover\" id=\"TablaDeRegistros\"style=\"margin:20px\">
        <thead class=\"thead-light\">
            <tr>
                <th>Categoria</th>
                <th>Mes</th>
                <th>Ganancia</th>
                $encabezado
            </tr>
        </thead>";
        while ($fila = $sql1->fetch_assoc()) {
            $id=$fila["id_ganancias"];
            $categoria = $fila["categoria"];
            $mes = $fila["Mes"];
            $ganancia = $fila["Ganancia"];
            print("<tr>
       <td data-id=$id id=\"categoria\">$categoria</td>
       <td id=\"mesT\">$mes</td>
       <td id=\"gananciaT\">$ganancia</td>$agregaB</tr>");
        }
        echo "</table>";
      }?>

</div>


<?php require_once 'includes/footer.php' ?>