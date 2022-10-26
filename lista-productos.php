<!--Aquí se abre la etiqueta php-->
<?php
	//La sentencia include incluye y evalúa el archivo especificado,
	//en este caso el archivo que va a evaluar e incluir es el de database.php
	include('database.php');
    //La variable $query realiza una consulta a la base de datos
	$query = "SELECT * FROM producto";
    //En las siguientes líneas de código se ejecuta la consulta que hiciste con la database
	$result = mysqli_query($connection, $query);
	if(!$result){
		die('Query fallido'.mysqli_error($connection));
	}
	//Aquí lo que podemos observar es como primero obtiene los datos de la consulta con fetch array mientras 
	//las columnas existan o sean iguales y separa los datos en un array
	$json = array();
	while ($row = mysqli_fetch_array($result)) {
		$json[] = array(
            //row es la columna de los datos y lo que está así [''] es el nombre de la columna
			'id' => $row['id'],
			'foto' => $row['foto'],
			'nombre' => $row['nombre'],
			'descripcion' => $row['descripcion'],
			'precio' => $row['precio'],
			'inventario' => $row['inventario']
		);
	}
//Aquí lo que hacen estas dos ultimas lineas de código es que la variable $jsonstring guarda toda 
//la información anterior por la visita a la BD y luego la muestra en echo $jsonstring
	$jsonstring = json_encode($json);
	echo $jsonstring;
?>
<!-- Aquí cerramos la etiqueta php-->
<!--Comentado por: Ramón Yuri Danzos García-->