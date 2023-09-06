<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
</head>
<body>


</body>
</html>

</div>
<div class=" col-12 text-center" >Audaviall SENA 2023</div>
</body>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>