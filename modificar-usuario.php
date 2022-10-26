<?php // Inicia archivo para modificar los datos del usuario desde la ventana de cuenta
// Se inicia sesión
	session_start();
	// Se incluye el archivo que crea la conexión a la base de datos
	include 'database.php';
//Dentro de un if se coloca una funcion isset la cual determina si las variables están definidas o no, en cada caso realizara una accion distinta
	if(isset($_POST['Dnombre'])){ 
		$nombre = $_POST['Dnombre'];// Se le proporciona una variable a los datos que se desean cambiar
		$correo = $_POST['Dmail'];
		$numero = $_POST['Dcel'];
		$pass = $_POST['Dpass'];
      // Se indica donde hacer los cambios dentro de la base de datos y se proporciona los nuevos datos obtenidos
		$query="UPDATE usuario SET nombre = '$nombre', numero = '$numero', pass = '$pass' WHERE correo = '$correo'";
      // Se crea la variable del resultado, si se ha realizado el cambio con éxito
		$result = mysqli_query($connection, $query);
		if (!$result) { //
			die('Cambio fallido.').mysql_error(); // Si no funciona, marcará error
		}
		header("Location: cuenta.php"); // Se envian los datos a la página de la cuenta
	}

// Realizado por: Alvarez Ponce Karla Melissa 4AMP
?>