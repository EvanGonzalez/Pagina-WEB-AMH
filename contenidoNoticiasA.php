<?php
    $iniciar = ($_GET['pagina']-1)*$Noticia_x_pag;    
?>
<!-- FILTRO DE COMPONENTES -->

<div class = "principal_NoticiasA"> <!-- principal_NoticiasA -->
    <div class = "contenedor_NoticiasA"> <!-- contenedor_NoticiasA -->

        <div class = "catalogo"> <!--catalogo -->
        <?php

            $query = conectar()->query("SELECT * FROM noticia order by fecha DESC LIMIT $iniciar, $Noticia_x_pag");     
// (PRD_CATEGPROD = $filtro or $filtro is null)
            
            WHILE ($valores = $query->fetch_assoc()){ 
                $truedescuento = false;
                ?>
                <!-- AQUI SE REPITE LOS NoticiasA  EN recuadro_producto -->
                <div class="container">
                    <div class="card my-4" id="card1" style="background-color: #121b4f; color: white;">
                        <h5 class="card-header" style="background-color: #0079be;">
                            <div class="row">
                                <div class="col-md-9">
                                    <b><?php echo $valores['titulo']?></b>
                                </div>
                                <div class="col-md-3">
                                    <form action="" method="post">
                                        <a href="FormularioModificar.php?titulo=<?php echo $valores['titulo']?>" class="btn btn-primary">Modificar</a>
                                        <a href="" class="btn btn-primary">Eliminar</a>                                              
                                    </form>
                                </div>
                            </div>
                        </h5>
                        <div class="card-body">
                            <h5 style="text-align: right;"><?php echo $valores['fecha']?></h5>
                            
                            <br>
                            <center>
                                <div class = "imagen_producto"> <!-- imagen_producto -->
                                    <?php
                                        $query_imagen = ("SELECT * FROM imagenes_noticia WHERE titulo = '".$valores['titulo']."'");

                                        $LV_EXEC = conectar()->query($query_imagen)
                                        or die(conectar()->error);


                                        WHILE ($LV_IMAGEN = $LV_EXEC->fetch_assoc()){
                                        ?>
                                            <img src="./FormNoticias/uploads/<?php echo ($LV_IMAGEN['imagen']); ?>" alt="" width="300px" height="300px" >
                                        <?php
                                        }
                                        ?>
                                </div>    
                            </center>
                            <br>
                            <?php echo $valores['descripcion']?>
                        </div>
                    </div>
                </div>
        <?php }?>

        
<nav aria-label="...">
    <ul class="pagination justify-content-center pagination-lg">
        <?php 
            $anterior="";
            if ($_GET['pagina']==1) {
                $anterior='class="class_a_href"';
            }       
        ?>
        <li class="page-item"><a class="page-link" href='NoticiasA.php?pagina=<?php echo $_GET['pagina']-1 ?>'>Anterior</a></li>
        <?php for($i=0;$i<$paginas;$i++){
             $class='';
             if ($_GET['pagina']==$i+1){
                 $class= 'class="active"';
                 ?>
                 <li class="page-item active" aria-current="page">
                    <a class="page-link" href="NoticiasA.php?pagina=<?php echo $i+1?>"><?php echo $i+1;?></a>
                 </li>
            <?php
             }else{
                ?>
                <li class="page-item"><a class="page-link" href="NoticiasA.php?pagina=<?php echo $i+1?>"><?php echo $i+1;?></a></li>
             <?php   
             }
            ?>
        <?php } ?>

        <?php 
            $despues="";
            if ($_GET['pagina']==$paginas) {              
                $despues='class="class_a_href"';
            } 
        ?>
        <li class="page-item"><a class="page-link" href='NoticiasA.php?pagina=<?php echo $_GET["pagina"]+1?>'>Siguiente</a></li>
    </ul>
</nav>
