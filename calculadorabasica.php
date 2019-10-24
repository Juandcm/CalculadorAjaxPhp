<?php

$numero1 = isset($_POST["numero1"])?$_POST["numero1"]:"";
$numero2 = isset($_POST["numero2"])?$_POST["numero2"]:"";
$numero3 = isset($_POST["numero3"])?$_POST["numero3"]:"";
$op = isset($_POST["op"])?$_POST["op"]:"";

function sumar($numero1, $numero2)
{
	return ($numero1 + $numero2);
}

function restar($numero1, $numero2)
{

	return ($numero1 - $numero2);
}

function multiplicar($numero1, $numero2)
{
	return ($numero1 * $numero2);
}

function dividir($numero1, $numero2)
{
	return ($numero1 / $numero2);
}
switch ($op)
	{
	case "sumar": 
	if ($numero1 == "" || $numero2=="") {
		$resultado = "";
	}else{
	$resultado = sumar($numero1, $numero2); 
	}
	break;

	case "restar": 
	if ($numero1 == "" || $numero2=="") {
		$resultado = "";
	}else{
	$resultado = restar($numero1, $numero2); 
	}
	break;

	case "multiplicar": 
	if ($numero1 == "" || $numero2=="") {
		$resultado = "";
	}else{
	$resultado = multiplicar($numero1, $numero2); 
	}
	break;

	case "dividir":
	if ($numero1 == "" || $numero2=="") {
		$resultado = "";
	}else{
		if($numero2 != 0) {
			$resultado = dividir($numero1, $numero2); 
			}else{
				$resultado = "No se puede dividir entre 0";
			}
	}
	break;
			default: $resultado = "";
			break;
		}
		/*Genera respuesta en JSON*/
	echo json_encode($resultado);
	
?>