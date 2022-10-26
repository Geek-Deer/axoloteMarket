
<?php //Se abre etiqueta php / Empieza el archivo para la búsqueda de productos
// Se incluye el archivo que realiza la conexión a la base de datos
	include ('database.php');
// Crea una variable para realizar las búsquedas y luego se le agrega un método POST  
	$search = $_POST['search'];
// Se abre un if con la variable de la búsqueda
	if (!empty($search)) {
		$query = "SELECT * FROM producto WHERE nombre LIKE '$search%'"; // Se busca desde la base de datos el nombre proporcionado por el usuario, si está lo manda llamar
		$result = mysqli_query($connection, $query); // Se crea una variable para el resultado de la busqueda
		if (!$result) { 
			die('Query error'.mysqli_error($connection));// Si no se encontró el producto o falla la conexión, marca error 
		}
        // Se hace una variable para el arreglo
		$json = array();
		// Dentro de un while se coloca la variable row que llevara una función que permite al arreglo diferenciar minúsculas y mayúsculas, 
		//almacenar los datos en indices numericos de la matriz resultante o en indices asociativos, generando una impresión ordenada.
		while ($row = mysqli_fetch_array($result)) {
			$json[] = array( // El arreglo ordenará el resultado de la búsqueda y sus datos para mostrarlos
				'id' => $row['id'],
				'nombre' => $row['nombre'],
				'foto' => $row['foto'], 
				'descripcion' => $row['descripcion'], 
				'precio' => $row['precio'], 
				'inventario' => $row['inventario']  
 			);
		}
		// Se crea una variable para la impresión, dentro van los datos anteriormente solicitados
		$jsonstring = json_encode($json);
		echo $jsonstring; // Se imprimen los datos 
	}
// Realizado por: Alvarez Ponce Karla Melissa 4AMP

?>