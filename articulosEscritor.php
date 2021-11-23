<?php require_once 'templates/header.php' ?>
<?php
    session_start();
    $idusu = $_SESSION['idLogin'];
?>
<script>
    function preguntaDel(){
        $bol = confirm('¿Estas seguro de eliminar articulo?');
        if ($bol){
        document.delform.submit()
        }
    }
    function preguntaPub(){
        $pud = confirm('¿Estas seguro de publicar articulo?');
        if ($pud){
        document.pubform.submit()
        }
    }
</script>
<div class="container-fluid py-5">
    <h1 class="titulos"><?php echo $_SESSION["user"]; ?>- Mis artículos</h1>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-3">
                <div class="card" >
                <?php
                        include "includes/dbcon.php";
                        $query_pag_data = "SELECT * FROM articulo WHERE id_autor = ".$idusu." ";
                        $result_pag_data = mysqli_query($conn, $query_pag_data);
                        while ($row = mysqli_fetch_assoc($result_pag_data)) {
                            $id_art = $row['id_articulo'];
                            $tema = $row['tema'];
                            $subtema = $row['subtema'];
                            $estatus = $row['estatus'];
                            $img = $row['imagen'];
                    ?>
                            <img class="card-img-top" src="<?php echo $img; ?>" alt="IMG-CARD">
                            <div class="card-body">
                                <p class="card-text text-center">Tema: <?php echo $tema; ?></p>
                                <p class="card-text text-center">Subtema: <?php echo $subtema; ?></p>
                                <p class="card-text text-center">Estatus: <?php echo $estatus; ?></p>
                                
                    <?php if($estatus == 'publicado'){
                            ?>
                                <form action="delete.php" name="delform" method="$_POST" style="display: inline;">
                                <button id="pub" name="delet" onclick="pregunta()" class="btn-brown" value="<?php echo $id_art; ?>">Eliminar</button>
                                </form>
                            </div>
                            <?php
                            }else{
                            ?>
                                <form action="editarArticulo.php" method="$_POST" style="display: inline;">
                                <button id="edit" name="idedit" type="submit" class="btn-brown" value="<?php echo $id_art; ?>">Editar</button>
                                </form>
                                <form action="pub.php" name="pubform" method="$_POST" style="display: inline;">
                                <button id="pub" name="idpub" onclick="preguntaPub()" class="btn-brown" value="<?php echo $id_art; ?>">Publicar</button>
                                </form>
                                <form action="delete.php" name="delform" method="$_POST" style="display: inline;">
                                <button id="del" name="delet" onclick="preguntaDel()" class="btn-brown" value="<?php echo $id_art; ?>">Eliminar</button>
                                </form>
                            </div>
                            <?php       
                            }
                        } ?>
                </div>
            </div>            
        </div>
    </div>
</div>

<?php require_once 'templates/footer.php' ?>