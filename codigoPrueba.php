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


