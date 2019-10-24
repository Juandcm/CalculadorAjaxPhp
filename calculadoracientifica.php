<?php 
$numero3 = isset($_POST["numero3"])?$_POST["numero3"]:"";
$op = isset($_POST["op"])?$_POST["op"]:"";


function calcularsen($numero3)
{
	return sin($numero3);

}
function calcularcos($numero3)
{
	return cos($numero3);
}
function calculartan($numero3)
{
	return tan($numero3);
}
function calcularelevado($numero3)
{
	return ($numero3 * $numero3);
}
function calcularraiz($numero3)
{
	return sqrt($numero3);
}
function calcularfactorial($numero3)
{
  	$result = 1;
    for($i=1;$i<=$numero3;$i++)
    {
        $result*=$i;
    }
	return ($result);
}

switch ($op) {
	case 'sen':
	if ($numero3 == "") {
		$resultado = "";
	}else{
	$resultado = calcularsen($numero3);
	} 
	break;
	case 'cos':
	if ($numero3 == "") {
		$resultado = "";
	}else{
	$resultado = calcularcos($numero3);
	} 
	break;
	case 'tan':
	if ($numero3 == "") {
		$resultado = "";
	}else{
	$resultado = calculartan($numero3);
	} 
	break;
	case 'elevado':
	if ($numero3 == "") {
		$resultado = "";
	}else{
	$resultado = calcularelevado($numero3);
	} 
	break;
	case 'raiz':
	if ($numero3 == "") {
		$resultado = "";
	}else{
	$resultado = calcularraiz($numero3);
	} 
	break;
	case 'factorial':
	if ($numero3 == "") {
		$resultado = "";
	}else{	
	$resultado = calcularfactorial($numero3);
	} 
	break;

	default: $resultado = "";
	break;
}

		/*Genera respuesta en JSON*/
	echo json_encode($resultado);

?>