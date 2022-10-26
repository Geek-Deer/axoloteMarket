<?php 
//Inicimaos sesión
session_start(); 
//Incluimos la página database.php
include 'database.php';$total=0;
?>
<!--Se abre html-->
<!DOCTYPE html>
<html lang="en">
<!--Abrimos head-->
<head>
	<meta charset="utf-8">
	<!--Le asignamos un nombre a la pestalla-->
	<title>Pagar</title>
	<!--Conectamos al css-->
	<link rel="stylesheet" type="text/css" href="Css/style.css">
    <!-- Se coloca un icono -->
	<link rel="icon" href="img/favicon1.png" type="image/png"/>
<!--Cerramos la etiqueta de head-->
</head>
<!--Iniciamos el body-->
<body>
	<!--Damos un espacio-->
	<br><br>
	<!--Esta división o bloque la nombramos RDrecibo-->
	<div class="RDrecibo">
		<!--Abrimos div y le asignamos una clase para después darles un diseño en css-->
		<div class="RDespacio">
			<!--Un texto con medida de h2-->
			<h2>AJOLOTE SHOP</h2>
			<!--Definimos un párrafo-->
			<p>MÉXICO</p>
			<!--Separador-->
			<hr><hr>
			<!--Colocamos el siguiente texto en negritas-->
			<p><b>DEPOSITAR A: 6441-1223-3324-2323</b></p>
			<!--Definimos un párrafo-->
			<p>AÑO: 2020</p>
			<!--Separador-->
			<hr><hr>
			<!--Abrimos la etiqueta para colocar una tabla-->
			<table style="width:100%;">
			<!--Contenedor de la cabecera de la tabla-->
				<thead>
					<!--Colocamos las celdas correspondientes-->
					<td>PRODUCTO</td>
					<td>IMPORTE</td>
					<td>CANT.</td>
				</thead>
                <!--Contenedor del cuerpo de la tabla-->
				<tbody id="RDprod">
					<?php foreach($_SESSION['carrito'] as $indice=>$producto){?>
						<!--Definimosla alineación-->
						<tr style="text-align:center;">
						    <!--Establecemos el orden en las columnas con presencia de php-->
							<td style="width:15%;"><?php echo $producto['nombre']; ?></td>
							<td style="width:5%;">$<?php echo number_format($producto['precio'],2); ?></td>
							<td style="width:15%;"><?php echo $producto['cantidad']; ?></td>
							<?php $total = $total+($producto['precio']*$producto['cantidad']);?>
						</tr>
					<?php } ?>		
				</tbody>
				<!--Abrimos filas-->
				<tr>
					<!--Colocamos las celdas correspondientes acompañado de php-->
					<td style="font-size: 1.1em;"><i>SUBTOTAL:</i></td>
					<td><?php echo '$'.number_format($total,2); ?></td>
				<!--Cerramos la fila-->
				</tr>
				<tr>
					<td style="font-size: 1.1em;"><i>IVA%:</i></td>
					<td><?php echo '$'.number_format($total*.16,2); ?></td>
				</tr>
				<tr>
					<td style="font-size: 1.1em;"><i>TOTAL:</i></td>
					<td><?php echo '$'.number_format($total+($total*.16),2); ?></td>
				</tr>
			<!--Cerramos tabla-->
			</table>
			<!--Definimos párrafos en negritas-->
			<b><p>GRACIAS POR SU PREFERENCIA</p>
			<P>VISITE NUESTRA PAG. PARA FUTURAS CONSULTAS</P></b>
			<!--Creamos un enlace-->
			<a href="index.php?cr=1" class="RDR" >Regresar</a>
		<!--Cerramos los div que habíamos abierto-->	
		</div>
	</div>
	<?php
	//Borramos todos y cad uno de los valores de nuestra sesión en el índice carrito justo después de mostrarlos en el ticket, a su vez actualizamos el stock de nuestro inventario, restándole una unidad a cada artículo adquirido.
foreach($_SESSION['carrito'] as $indice=>$producto){
	$varID = $producto['id'];
	$res = $connection ->query("SELECT inventario FROM producto WHERE id='".$varID."'")or die($connection->error);
	$fila = mysqli_fetch_row($res);
	$can = $fila['0'];
	echo $can.'<br>';
	$can = $can - 1;
	echo $can;
	$res1 = $connection ->query("UPDATE producto SET inventario= '" .$can. "' WHERE id='".$varID."'")or die($connection->error);
	unset($_SESSION['carrito'][$indice]);
} 
?>
<!--Cerramos body y html-->
</body>

</html>


<!--Comentado por: Briseida Elizabeth Monges Varela-->