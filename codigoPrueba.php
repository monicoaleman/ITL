<?php 
	//tomar variables post
$pBaseMayor      =$_POST["bMayor"];
$pBaseMenor      =$_POST["bMenor"];
$pAltura         =$_POST["altura"];

// Realiza la operacion para determinar el área
$area = ($pBaseMayor + $pBaseMenor ) / 2 * $pAltura;

if ($bMenor < $bMayor) {
	$msj= "El área del trapecio es: ".$area;
	
}
else{
	$msj="La número de la base menor no puede ser mas alto que el de la base mayor";
}




 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultado de Operaciones</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.css">
</head>
<body>

	<legend>
		<h2>Resultado del ejercicio # 4</h2>
	</legend>
	
	<div class="container">
		<div class="container-fluid">
			<p class="resultado">
				 <?php echo $msj; ?>
			</p>
		</div>
	</div>
	
	<div class="container">
		<a href="index.php" title="Regresar al Ejercicio" class="btn btn-primary pull-right btn-lg">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
			Ejercicio
		</a>	
	</div>
	
</body>
</html>
