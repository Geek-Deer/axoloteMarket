<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Icono de la ventana -->
    <link rel="icon" href="img/favicon1.png" type="image/png"/>
    <!-- Liga a los documentos CSS -->
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <title>Explorar</title>
</head>
<?php include 'barnav.php'; include 'database.php';?>

<!--Paginas-->
<?php
    if(isset($_GET['category'])){
        $catVar = $_GET['category'];
        //Con categoría
        $sql_registros = mysqli_query($connection, "SELECT COUNT(*) as total_registro FROM producto WHERE cat='".$catVar."'");
        if(isset($_GET['sub'])){
            $subcatVar = $_GET['sub'];
            //Con categoría y subcategoría
            $sql_registros = mysqli_query($connection, "SELECT COUNT(*) as total_registro FROM producto WHERE cat='".$catVar."'AND subcat='".$subcatVar."'");
        }
    } else{
        //Sin categorías
        $sql_registros = mysqli_query($connection, "SELECT COUNT(*) as total_registro FROM producto");
    } 
    $resultado_registro = mysqli_fetch_array($sql_registros);
    $total_registro = $resultado_registro['total_registro'];
    $por_pagina = 9;
    if(empty($_GET['pagina'])){
        $pagina = 1;
    } else{
        $pagina=$_GET['pagina'];
    }
    $desde = ($pagina-1) * $por_pagina;
    $total_paginas = ceil($total_registro / $por_pagina);
    if($pagina > $total_paginas||$pagina <=0){
        echo '<script type="text/javascript"> window.location="shop.php?pagina=1";</script>';
    };
?>

<body>
    <main class="contenedor" >
        <article style="height:auto;"> 
            <!-- Inicio de el apartado explorar  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row" id="rows">
                                        <?php 
                                            if(isset($_GET['category'])){
                                                $catVar = $_GET['category'];
                                                //Con categoría
                                                $resultado = $connection ->query("SELECT * FROM producto WHERE cat='".$catVar."'ORDER BY id ASC limit $desde, $por_pagina")or die($connection->error);
                                                if(isset($_GET['sub'])){
                                                    $subcatVar = $_GET['sub'];
                                                    //Con categoría y subcategoría
                                                    $resultado = $connection ->query("SELECT * FROM producto  WHERE cat='".$catVar."' AND subcat='".$subcatVar."'ORDER BY id ASC limit $desde, $por_pagina")or die($connection->error);
                                                }
                                            } else{
                                                //Sin categorías
                                                $resultado = $connection ->query("SELECT * FROM producto ORDER BY id ASC limit $desde, $por_pagina")or die($connection->error);
                                            }                             
                                        ?>
                                        <?php
                                        
                                            while($fila = mysqli_fetch_array($resultado)){
                                        ?>
                                            <!-- Se crea el apartado de un producto -->
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <!-- Se crea la imagen y los enlaces dentro de ella -->
                                                    <div class="box-img-hover">
                                                        <a href="producto.php?id=<?php echo $fila['id']; ?>"><img src="img/productos/<?php echo $fila['foto']; ?>" class="img-fluid" alt="Image" style="width:200px;height:200px;"></a>
                                                    </div>
                                                    <!-- Se crea el apartado con la info del producto -->
                                                    <div class="why-text">  
                                                        <h4><?php echo $fila['nombre']; ?></h4>
                                                        <p style="text-align:center; color:#737373;"><?php echo $fila['descripcion']; ?></p>
                                                        <h5><?php echo "$".$fila['precio'];?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                        </div>
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </div>
                        <div style="background-color:rgb(0,0,0,.1); height:500px; width:280px; ">
                            <ul style="margin:30px 50px;list-style:none;">
                            <li><a href="shop.php">Todos</a></li>
                            <li><a href="shop.php?category=figura">Figuras</a></li>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=figura&sub=ceramica"  style="color:black;">Cerámica</a></li></ul>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=figura&sub=barro"  style="color:black;">Barro</a></li></ul>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=figura&sub=cristal"  style="color:black;">Cristal</a></li></ul>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=figura&sub=madera" style="color:black;" >Madera tallada</a></li></ul>
                             <li><a href="shop.php?category=accesorio">Accesorios</a></li>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=accesorio&sub=pulsera"  style="color:black;">Pulsera</a></li></ul>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=accesorio&sub=collar"  style="color:black;">Collar</a></li></ul>
                            <li><a href="shop.php?category=bordado">Bordados</a></li>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=bordado&sub=mantel"  style="color:black;">Manteles</a></li></ul>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=bordado&sub=servilleta"  style="color:black;">Servilletas</a></li></ul>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=bordado&sub=blusa" style="color:black;">Blusas</a></li></ul>
                            <li><a href="shop.php?category=recuerdos">Recuerdos</a></li>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=recuerdos&sub=llavero"  style="color:black;">Llaveros</a></li></ul>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=recuerdos&sub=alebrije"  style="color:black;">Alebrijes</a></li></ul>
                                <ul style="list-style:none;"><li style="margin-left:2em;"><a href="shop.php?category=recuerdos&sub=muneca" style="color:black;" >Muñecas</a></li></ul>    
                         </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Sin-->
        <?php 
            if(!isset($_GET['category'])&&!isset($_GET['sub']))
            {
        ?>                                        
        <div class="paginador">
            <ul>

                <?php 
                    if($pagina != 1){   
                ?>
                        <li><a href="?pagina=1">|<<</a></li>
                        <li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
                      
                <?php } ?>
                <?php 
                
                    for($i=1; $i<=$total_paginas; $i++){
                        if($i == $pagina){
                            echo '<li class="pageSelected">'.$i.'</li>';
                        } else{
                            echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
                        }  
                    }
                
                ?>
                <?php 
                    if($pagina != $total_paginas){
                ?>
                        <li><a href="?pagina=<?php echo $pagina+1; ?>"> >> </a></li>
                        <li><a href="?pagina=<?php echo $total_paginas; ?>"> >>| </a></li>
                    <?php }?> </div> <?php } ?> 


        <!--Ambas-->
        <?php 
            if(isset($_GET['category'])&&!isset($_GET['sub']))
            {
        ?>                                        
        <div class="paginador">
            <ul>

                <?php 
                    if($pagina != 1){   
                ?>
                        <li><a href="?pagina=<?php echo '1&category='.$catVar; ?>">|<<</a></li>
                        <li><a href="?pagina=<?php echo $pagina-1; ?><?php echo '&category='.$catVar; ?>"><<</a></li>
                      
                <?php } ?>
                <?php 
                
                    for($i=1; $i<=$total_paginas; $i++){
                        if($i == $pagina){
                            echo '<li class="pageSelected">'.$i.'</li>';
                        } else{
                            echo '<li><a href="?pagina='.$i.'&category='.$catVar.'">'.$i.'</a></li>';
                        }  
                    }
                
                ?>
                <?php 
                    if($pagina != $total_paginas){
                ?>
                        <li><a href="?pagina=<?php echo $pagina+1; ?><?php echo '&category='.$catVar;?>"> >> </a></li>
                        <li><a href="?pagina=<?php echo $total_paginas.'&category='.$catVar; ?>"> >>| </a></li>
                    <?php }?> </div> <?php } ?> 
        
        <!--Ambas-->
        <?php 
            if(isset($_GET['category'])&&isset($_GET['sub']))
            {
        ?>                                        
        <div class="paginador">
            <ul>

                <?php 
                    if($pagina != 1){   
                ?>
                        <li><a href="?pagina=<?php echo '1&category='.$catVar.'&sub='.$subcatVar; ?>">|<<</a></li>
                        <li><a href="?pagina=<?php echo $pagina-1; ?><?php echo '&category='.$catVar.'&sub='.$subcatVar; ?>"><<</a></li>
                      
                <?php } ?>
                <?php 
                
                    for($i=1; $i<=$total_paginas; $i++){
                        if($i == $pagina){
                            echo '<li class="pageSelected">'.$i.'</li>';
                        } else{
                            echo '<li><a href="?pagina='.$i.'&category='.$catVar.'&sub='.$subcatVar.'">'.$i.'</a></li>';
                        }  
                    }
                
                ?>
                <?php 
                    if($pagina != $total_paginas){
                ?>
                        <li><a href="?pagina=<?php echo $pagina+1; ?><?php echo '&category='.$catVar.'&sub='.$subcatVar;?>"> >> </a></li>
                        <li><a href="?pagina=<?php echo $total_paginas.'&category='.$catVar.'&sub='.$subcatVar; ?>"> >>| </a></li>
                    <?php }?> </div> <?php } ?> 
                        
            </ul>
        </article>
        
    </main>
    

    
    <!-- Se manda a llamar a los scripts necesarios para darle dinamismo a la página -->

</body>
<?php include 'footer.html'; ?>

</html>
<!-- Hecho por Ramón Danzos -->