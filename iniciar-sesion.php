<!--Abrimos la etiqueta php para comenzar a programar en dicho lenguaje.-->
<?php 
  // El session_start es para que le usuario pueda iniciar o reanudar su sesión.
  session_start();
// El require detiene el script en caso de error
  require('database.php');
// Aquí se envia a la bd lo que el usuario ingresó en correo y password.
  $correo = $_POST["correo"];
  $pass = $_POST["password"];
// Aquí hace una consulta a la base de datos para verificar que los datos concuerden.
  $query = mysqli_query($connection,"SELECT * FROM usuario WHERE correo = '".$correo."' and pass = '".$pass."'");
  $nr = mysqli_num_rows($query);
/*Si el usuario está registrado lo mandará al inicio para que pueda comprar nuestros productos
pero si en caso de que no lo este lo va a mandar a registrarse para que se haga ina cuenta.*/
  if ($nr == 1) {
    $_SESSION['email'] = $correo;
    header("Location: index.php");
    unset($_SESSION['carrito']);
  }elseif ($nr == 0) {
    header("Location: registro.php");
  }
// Aquí se cierra la etiqueta php.
?>
<!--Realizado por: Claudia Samantha Quesney López-->