<?php session_start();?>
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
    <main class="contenedor">
        <!--Se define la altura que tendrá dicha página en blanco y dentro se colocan los elementos-->
        <article style="height:800px;">
        <!--Iniciamos con un slideshow o carrusel, agregando la base home, la clase slider para las animaciones, slide active
        para las acciones con css, container para el texto y caption para darle un formato específico al texto-->
            <div class="jumbotron text-center" style="background-color:#d6d6d6;">
                <h1 class="display-4">¡Paso final!</h1>
                <div style="margin:30px;background-color:#828387;width:100%;height:2px;"></div>
                
                <p class="lead">Estás a punto de pagar la cantidad de:
                <?php 
                    $total=0;
                    foreach($_SESSION['carrito'] as $indice=>$producto){
                        $total = $total+$producto['precio']*$producto['cantidad'];
                    }
                    $_POST['total'] = $total;
                    echo '<p class="lead" style="font-size:30px;font-weight:bold;">$'.number_format($total, 2).'<span style="font-size:15px;">mxn</span></p>';
                ?>
                <div class="jumbotron" style="font-size:20px;font-weight:bold;">
                    <div style="align:center;">
                        <a href="recibo.php" style="cursor:pointer;"><img src="img/oxxo.png" style="height:100px; width:150px;margin:20px;"></img></a>  
                    </div>
                </div>
            </div>
        </article>
    </main>
</body>
                    
<!--Cerramos todo el body e incluimos tanto nuestros scripts para el dinamismo de la página como el footer
html que contiene la información de contacto-->
<?php include 'footer.html' ?>
<script src="Js/script.js"></script>
</html>
<!--Comentado por Diego Sánchez Luna-->