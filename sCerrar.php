<?php
//Inicimaos sesión por si no se a inniciado y así poder cerrarla
session_start();
//Se libera todas las variables de sesión actualmente registradas
session_unset();
//Se destruye toda la información registrada de una sesión 
//así que cerramos sesión
session_destroy();
//Establecemos la manera más rápida de redirigir usuarios 
header("Location: index.php");
//Comentado por: Briseida Elizabeth Monges Varela
?>
<!--Comentado por: Briseida Elizabeth Monges Varela-->