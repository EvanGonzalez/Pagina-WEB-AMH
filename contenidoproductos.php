<!-- RUTA CORREGIDA -->
<?php
    $iniciar = ($_GET['pagina']-1)*$productos_x_pag;    
?>
<!-- FILTRO DE COMPONENTES -->

<div class = "principal_productos"> <!-- principal_productos -->
    <div class = "contenedor_productos"> <!-- contenedor_productos -->

        <div class = "catalogo"> <!--catalogo -->
        <?php

            $query = conectar()->query("SELECT * FROM noticia order by fecha DESC LIMIT $iniciar, $productos_x_pag");     
// (PRD_CATEGPROD = $filtro or $filtro is null)
            
            WHILE ($valores = $query->fetch_assoc()){ 
                $truedescuento = false;
                ?>
                <!-- AQUI SE REPITE LOS PRODUCTOS  EN recuadro_producto -->
                <div class="container">
                    <div class="card my-4" id="card1" style="background-color: #121b4f; color: white;">
                        <h5 class="card-header" style="background-color: #0079be;"> <b><?php echo $valores['titulo']?></b></h5>
                        <div class="card-body">
                            <h5 style="text-align: right;"><?php echo $valores['fecha']?></h5>
                            
                            <br>
                            <center>
                                <div class = "imagen_producto"> <!-- imagen_producto -->
                                    <a href="verproducto.php?producto=<?php echo $valores['titulo']?>">
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
                                    </a>
                                </div>    
                            </center>
                            <br>
                            <?php echo $valores['descripcion']?>
                        </div>
                    </div>
                </div>
        <?php }?>

        

        
<div class="center">
    <ul class="pagination">
    <?php 
        $anterior="";
        if ($_GET['pagina']==1) {
            $anterior='class="class_a_href"';
        }       
    ?>
    <li>
        <a <?php echo $anterior ?> href='productos.php?pagina=<?php echo $_GET['pagina']-1 ?>' aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li>
    
    <?php for($i=0;$i<$paginas;$i++){?>
        <li>  
            <?php
                $class='';
                if ($_GET['pagina']==$i+1){
                    $class= 'class="active"';
                }
            ?>       
            <a <?php echo $class;?> href="productos.php?pagina=<?php echo $i+1?>">
                <?php echo $i+1;?>
            </a>
        </li>
          
    <?php } ?>

    <?php 
        $despues="";
        if ($_GET['pagina']==$paginas) {              
            $despues='class="class_a_href"';
        } 
    ?>
    
    <li>
        <a <?php echo $despues ?> href='productos.php?pagina=<?php echo $_GET["pagina"]+1?>' aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>
        
    </ul>    
</div>
