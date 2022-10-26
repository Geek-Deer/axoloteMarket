/*Señalamos que la página tendrá acceso a la base de datos*/
$(document).ready(function(){
    console.log('Jquery esta funcionando');
	$('#RDnav').keyup(function(e) {
		let search = $('#RDnav').val();
		/*Utilizamos la función de búsqueda ajax y definimos que utilizará buscar-prod.php*/
		$.ajax({
			url: 'buscar-prod.php',
			type: 'POST',
			data: {search},
			success: function(response) {
				let productos = JSON.parse(response);
				let template = '';
                /*Indica que se van a buscar los productos en la base de datos y se colocarán de la forma señalada en la página web*/
				productos.forEach(producto => {
					template += `
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
						    <div class="products-single fix">
						        <div class="box-img-hover">
						            <a href="producto.php?id=${producto.id}"><img src="img/productos/${producto.foto}" class="img-fluid" alt="Image" style="width:200px;height:200px;"></a>
						        </div>
						        <div class="why-text">  
						            <h4>${producto.nombre}</h4>
						            <p style="text-align:center; color:#737373;">${producto.descripcion}</p>
						            <h5>${producto.precio}</h5>
						        </div>
						    </div>
						</div>
					`
				});
                /*Aquí decimos que este contenido se mantendrá del lado del cliente*/
				$('#rows').html(template);
			}
		});
	})
});
/*Realizado por: Meza Moreno Alejandra*/