<?php session_start();?>

<?php
    include('database.php');
    if(isset($_GET['id'])){
        $resultado = $connection ->query("SELECT * FROM producto WHERE id=".$_GET['id'])or die($connection->error);
        if(mysqli_num_rows($resultado) > 0){
            $fila = mysqli_fetch_row($resultado);          
        } else{
            header("Location: index.php");
        }
    } else{
        header("Location: index.php");
    }
?>

<!--Validamos el tipo de documento-->
<!DOCTYPE html>
<!--Se coloca como idioma por defecto el inglés-->
<html lang="en">
    <!--Agregamos todos los metadatos, el favicon de la pestaña y las relaciones entre los archivos de estilo en cascada y la 
página en cuestión-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AxolotlShop</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="icon" href="img/favicon1.png" type="image/png"/>
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
</head>
<!--Agregamos la barra de navegación-->
<?php include 'navbar.php' ?>
<body>
    <!--Se crea un contenedor que contiene la "página" en blanco para organizar el resto de los elementos-->
    <main class="contenedor" id="RDG">
        <!--Se define la altura que tendrá dicha página en blanco y dentro se colocan los elementos-->
        <article style="height:1000px;">
            <div style="float:left; margin:50px;">
                <img src="img/productos/<?php echo $fila['2']; ?>" style="width:400px;height:400px;box-shadow:4px 4px 10px 1px rgb(0,0,0,.45);">
            </div>
            <div style="float:left; margin:50px; width:50%; line-height:60px;">
                <h2><?php echo $fila['1']; ?></h2>
                <br>
                <h5 style="color:rgb(0, 0, 0,.5); line-height:30px;"><?php echo $fila['3']; ?></h5>
                <br>
                <h3 style="color:rgb(209, 126, 17,.8);"><?php echo "$".$fila['4']; ?></h3>
                <br>
                <table width="180%">
                    <tr>
                        <!--iniciamos distintas etiquetas php en la que se pregunta si existe la variable de sesión con el índice email, en caso de que se encuentre y el artículo seleccionado en cuestion cuente con una o más unidades en el inventario, le permitimos al usuario agregar dicho producto al carrito, en caso contrario, si no existe la sesión lo redireccionamos a registro pero si existe la sesión simplemente no hace nada.-->
                        <?php if(isset($_SESSION['email'])&&$fila['5']>=1
                        ){?><td><p><a href="carrito.php?id=<?php echo $fila['0'] ?>" class="registrar">Añadir al carrito</a></p></td>
                        <?php } else{ 
                        if($fila['5']<=0&&isset($_SESSION['email'])){?>
                            <td><p><a  class="registrar" style="cursor:not-allowed;">Añadir al carrito</a></p></td>
                        <?php } else{ ?>
                           <td><p><a href="registro.php" class="registrar" style="cursor:not-allowed;">Añadir al carrito</a></p></td>
                        <?php }
                        
                        } ?>    
                        <td align="right"><p><a href="shop.php" class="registrar">Volver</a></p></td>
                    </tr>
                </table>
            </div>
        </article>
    </main>
</body>
<!--Cerramos todo el body e incluimos tanto nuestros scripts para el dinamismo de la página como el footer
html que contiene la información de contacto-->
<?php include 'footer.html'; ?>
<script src="Js/script.js"></script>
</html>
<!--Comentado por Diego Sánchez Luna-->