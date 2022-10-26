<!--Aquí se abre la etiqueta php-->
<?php 
    /*La sentencia include incluye y evalúa el archivo especificado, en este caso
	el archivo que va a evaluar el incluir es el de database.php*/
	include 'database.php';
    /*Recuperamos los datos enviados por el usuario*/
	if(isset($_POST['email'])&&$_POST['pass']==$_POST['conpass']) {
		/*Se conecta a bd*/
		$resultado = $connection ->query("SELECT * FROM usuario WHERE correo='".$email."'");
		/*Se verificara que no exista una cuenta con el correo que se ingreso por el usuario para 
		que pueda proseguir le proceso*/
		if(mysqli_num_rows($resultado) > 0){
			echo '<p style="background-color:rgb(222, 182, 2,1); padding:15px; border:2px solid white; 
			color:white;">Ya existe una cuenta con ese correo.</p>';
		} 	else{
			/*El método POST codifica información que se envía a través del body del HTTP include, por lo que 
		    no aparece en el url (PHP proporciona el array asociativo $_POST para acceder a la información enviada)*/
				$nombre = $_POST['nombre'];
				$numero = $_POST['numero'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				$conpass = $_POST['conpass'];
				$query = "INSERT into usuario (nombre, numero, correo, pass) 
				VALUES ('$nombre','$numero','$email','$pass')";
				$result = mysqli_query($connection, $query);
				/*En caso este todo correcto, el programa va a mandar al usuarioa a la página principal, 
				la de index.php*/
				if($result>0){
					echo '<script type="text/javascript"> window.location="index.php";</script>';
					unset($_SESSION['carrito']);
					$_SESSION['email'] = $email;
				/*Y si en caso que la condición pasada no se cumpla el programa va a mandar un mensaje que diga 
				que la consulta falló y ocurrio un error*/
				}else{
					echo '<p style="background-color:rgb(217, 34, 2,1); padding:15px; border:2px solid white; 
					color:white;">Ocurrió un error en su registro.</p>';
				}
			}
		}
?>
<!-- Aquí cerramos la etiqueta php-->
<!--Comentado por: Briseida Elizabeth Monges Varela-->