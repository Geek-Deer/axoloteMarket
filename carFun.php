<!--Aqui iniciamos abriendo la etiqueta php para comenzar a programar.-->
<?php
//session_start es para iniciar una sesión o reanudarla.
    session_start();
    /* Si la variable está definida se enviará la información al botón que abrirá un switch
     que eliminará el producto si este dicho producto está dentro de la base de datos del carrito, 
     localizandolo y descartandolo.
    */
    if(isset($_POST['btnAccion'])){
        switch($_POST['btnAccion']){
                case 'Eliminar':
                if(is_numeric($_POST['bID'])){
                    $bid = $_POST['bID'];
                    foreach($_SESSION['carrito'] as $indice=>$producto){
                        if($producto['id']==$bid){
                            unset($_SESSION['carrito'][$indice]);
                            header("Location: carrito.php");
                    }
                }
            } 
        break;
    }
 }
 //Aqui se cierra la etiqueta php.
?>
<!--Realizado por: Claudia Samantha Quesney López-->