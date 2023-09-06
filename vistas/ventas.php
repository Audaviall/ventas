<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>ventas</title>
	<?php require_once "menu.php"; ?>
</head>
<body>
	<div class="container">
		<h1>Venta de productos</h1>
		<div class="row">
			<div class="col-sm-12">
				
				<span class="btn btn-default" id="ventaProductosBtn">Vender prodcutos</span>
				<span class="btn btn-default" id="ventasHechasBtn">Ventas hechas</span>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12"></div>
				<div id="ventaProductos"></div>
				<div id="ventasHechas"></div>
		</div>
	</div>

</body>
</html>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#ventaProductosBtn').click (function(){
				esconderSeccionVenta ();
				$('#ventaProductos').load('ventas/ventasDeProductos.php');
				$('#ventaProductos').show();
			});

			$('#ventasHechasBtn').click (function(){
				esconderSeccionVenta ();
				$('#ventasHechas').load('ventas/ventasyReportes.php');
				$('#ventasHechas').show();
			});


		});

		function esconderSeccionVenta (){
			$('#ventaProductos').hide();
			$('#ventasHechas').hide();
		}

	</script>

</div>
<div class=" col-12 text-center" >Audaviall SENA 2023</div>
</body>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>