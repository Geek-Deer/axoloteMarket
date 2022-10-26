<?php session_start();?>
<!--Iniciamos por abrir el docuemnto html poniendo doctype html y después el lenguaje en el cual vas a programar.-->
<!DOCTYPE html>
<html lang="en">
  <!--Abrmos la etiqueta head en donde vamos a poner el titulo y debajo un link hacia la hoja de estilo de css.-->
<head> 
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
        <title>AxolotlShop - Iniciar Sesión</title> <!-- Se agrega el título -->
        <link rel="shortcut icon" href="img/favicon(1).ico" type="image/x-icon"> <!-- Se coloca un icono -->
        <link rel="icon" href="img/favicon1.png"> <!-- Se coloca la misma imagen del icono pero en formato png -->
        <link rel="stylesheet" href="Css/style.css" /> <!-- Llamamos a la hoja de estilo para el diseño -->
</head>
<!--En este espacio cerramos la etiqueta head y abrimos la etiqueta body para comenzar a codificar nustros bloques de texto.-->
<body style="background-color:#222933; margin-top:5%;">
 <!--Cuando abrimos la etiqueta body ponemos unas especificaciones como lo son el color de fondo y los margenes.--> 
 <!--En la siguiente linea de código lo que se observa es como abrimos un div en el cual ponemos nuestro logo jutno con las especificaciones largo, ancgo, etc. 
Aquí mismo cerramos el div-->
  <div align="center"><img src="img/AJblanco.png" alt= "Logotipo AjoloteShop" width="300" height="200"/></div>
  <!--Aquí abrimos otro div (un div se utiliza para crear secciones o agrupar contenidos) en el cual vamos a poner
  lo que es el inicio de sesión (en donde si tienes una cuenta en nuestra página de compras solo tienes que ingresar tu correo y contraseña).-->
  <div class="Sami">
    <!--Aquí mediante la etiqueta h2 (la cual se utiliza para el tamaño de la letra) ponemos Ingresar.-->
    <h2>Ingresar:</h2> 
    <!--Comenzamos por abrir la etiqueta table paara empezar a hacer una tabla con los campos E-mail y Password. -->
    <form action="iniciar-sesion.php" method="POST">
    <table id="tablita">
     <tr> 
       <td>
         <!--En la siguiente linea de código es como podemos poner un label con cualquier oracion y/o palabra y luego está el input
        en donde tu puedes agregar un textfiel para que el usuario ingrese los datos que tu solicites en el label.
      En este caso podemos observar que el label dice E-mail y que el usuario va a llenar el textfiel con su correo-->
        <label for="correo"><h3>E-mail:</h3></label>
       <!--Los input tienen algunas especificaciones como lo son type (para indicar que tipo de respuesta quieres en tu textfield, hay númerica, email, texto, contraseña,etc.)
         class (esta se usa con css para poner lindo el textfield) y como opcion placeholder (este se usa para poner predeterminado un ejemplo de la
         respuesta que quieres en el textfield)--> 
        <input type="email" name="correo" class="redondeado"  placeholder="Ej.ajolote@gmail.com" required> 
     </td>
     <td>
       <!--En la siguiente linea de código es como podemos poner un label con cualquier oracion y/o palabra y luego está el input
        en donde tu puedes agregar un textfiel para que el usuario ingrese los datos que tu solicites en el label.
      Aquí se puede observar que el label dice Tu Password el cual está indicando que en el textfiel el usuario va a ingresa su contraseña -->
      <label for="password"><h3>Tu Password:</h3></label>
      <input  name="password" type="password" class="redondeado" placeholder="Ej.AjoloteShop21" title="Debe contener al menos un número y una letra minúscula y mayúscula, y entre 4 y 8 caracteres" minlength="4" maxlength="8" required>  
    </td>
     </tr>       
     <!--Aquí cerramos la etiqueta table, lo cual da fin a la tabla que estabamos haciendo-->
    </table>
    <!--El siguiente input es un poco diferente ya que este se útiliza para crear botones-->
    <input name="submit" class="registrar" type="submit" value="Ingresar">
    </form> 
    <!--Aquí estamos cerrando el div que abrimos anteriormente-->
  </div>
  <!--Aquí abrimos otro div (un div se utiliza para crear secciones o agrupar contenidos) en el cual vamos a poner el registro el usuario lo utiliza
    cuando se va a hacer una cuenta en nuestra página Web.-->
  <form id="Rregistrar" action="" method="post">
  <div class="Sami">
     <!--Aquí mediante la etiqueta h2 (la cual se utiliza para el tamaño de la letra) ponemos Ingresar.-->
    <h2>Registrarse:</h2> 
    <!--Comenzamos por abrir la etiqueta table paara empezar a hacer una tabla con los campos como nombre, correo, contraseña y número de celular. -->
    <table id="tablita" autocomplete="on"> 
      <tr>
        <td>
           <!--En la siguiente linea de código es como podemos poner un label con cualquier oracion y/o palabra y luego está el input
        en donde tu puedes agregar un textfiel para que el usuario ingrese los datos que tu solicites en el label.
      En este caso podemos observar que el label dice Nombre por lo tanto asociamos a que el usuario va a ingresar su nombre en el textfield-->
          <label for="nombre"><h3>Nombre:</h3></label>
          <input type="text" class="redondeado"    name="nombre" placeholder="Ej.Ramón Yuri Danzos García" required>
          <!--En la siguiente linea de código es como podemos poner un label con cualquier oracion y/o palabra y luego está el input
        en donde tu puedes agregar un textfiel para que el usuario ingrese los datos que tu solicites en el label.
      En este caso podemos observar que el label dice Número por lo tanto asociamos a que el usuario va a ingresar su número teléfonico en el textfield-->
          <label for="numero"><h3>Número:</h3></label>
          <input type="text" class="redondeado"  name="numero" maxlength="10" onkeypress="return solonumeros(event)" placeholder="Ej.6441552304" required> 
          <!--En la siguiente linea de código es como podemos poner un label con cualquier oracion y/o palabra y luego está el input
        en donde tu puedes agregar un textfiel para que el usuario ingrese los datos que tu solicites en el label.
      En este caso podemos observar que el label dice E-mail por lo tanto asociamos a que el usuario va a ingresar su correo en el textfield-->
          <label for="email"><h3>E-mail:</h3></label>
          <input type="email" class="redondeado"  name="email" placeholder="Ej.ejemplo@gmail.com" required>
        </td>
        <td>
          <!--En la siguiente linea de código es como podemos poner un label con cualquier oracion y/o palabra y luego está el input
        en donde tu puedes agregar un textfiel para que el usuario ingrese los datos que tu solicites en el label.
      En este caso podemos observar que el label dice Tu Password por lo tanto asociamos a que el usuario va a ingresar su Password en el textfield-->
          <label for="pass"><h3>Tu Password:</h3></label>
          <input  name="pass" class="redondeado" type="password" placeholder="Ej.AjoloteShop21" title="Debe contener al menos un número y una letra minúscula y mayúscula, y entre 4 y 8 caracteres" minlength="4" maxlength="8" required> 
           <!--En la siguiente linea de código es como podemos poner un label con cualquier oracion y/o palabra y luego está el input
        en donde tu puedes agregar un textfiel para que el usuario ingrese los datos que tu solicites en el label.
      En este caso podemos observar que el label dice Confirma tu password (esto se usa como medida de seguridad por si el usuario se equivoca en el primer intento)
       por lo tanto asociamos a que el usuario va a volver a ingresar la misma contraseña que puso anteriormente en el textfield-->
          <label for="conpass"><h3>Confirma tu password:</h3></label>
          <input  name="conpass"class="redondeado" type="password" placeholder="Ej.AjoloteShop21" minlength="4" maxlength="8" required>
        </td>
      </tr>
      <!--Aquí cerramos la etiqueta table, lo cual da fin a la tabla que estabamos haciendo-->
    </table>
     <!--El siguiente input es un poco diferente ya que este se utiliza para crear botones-->
     <button type="submit" class="registrar">
        Registrar
     </button>
    <!--El código que sigue es un a href que va a mandar al usuario a la página principal en este caso llamada index cuando le de clic al
    boton-->
    <a href="index.php" class="registrar"style="float:right;">Regresar</a>
  </div>
     </form>
     <?php include 'agg-usuario.php'?>
  <!--La siguiente etiqueta es un script que enlaza a un documento JavaScript en donde están algunas funciones de la página.-->
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="Js/VRN.js"></script>
  <script src="Js/db.js"></script>
  <!--Aqui finalizamos la etiqueta body y por lo tanto nuestro código fuerte.-->
</body>
<!--Cerramos la etiqueta html.-->
</html> 
<!--Realizado por: Claudia Samantha Quesney López 4AmPro.-->