$('input.number').formance('format_number');


// Inicio de las Funciones de la Calculadora Basica
function CalcularSuma()
{
	var numero1 = $("#numero1").val();
	var numero2 = $("#numero2").val();
	var op = "sumar";
			
	/*Solicitamos el resultado con AJAX según el método POST*/
	/*como parámetro (por POST) se envía el par1, par2 y op.*/
	$.post("calculadorabasica.php", {numero1: numero1, numero2: numero2, op: op}, function(resultado){
		$("#resultadoBasico").val(resultado);
		console.log(resultado);
		}, "json"); /*El parámetro "json" indica que la respuesta desde PHP es en formato JSON*/
}	

function CalcularResta()
{
	var numero1 = $("#numero1").val();
	var numero2 = $("#numero2").val();
	var op = "restar";
	$.post("calculadorabasica.php", {numero1: numero1, numero2: numero2, op: op}, function(resultado){
		$("#resultadoBasico").val(resultado);
		console.log(resultado);
		}, "json");
}	

function CalcularMultiplicacion()
{
	var numero1 = $("#numero1").val();
	var numero2 = $("#numero2").val();
	var op = "multiplicar";
	$.post("calculadorabasica.php", {numero1: numero1, numero2: numero2, op: op}, function(resultado){
		$("#resultadoBasico").val(resultado);
		}, "json"); 
}	
function CalcularDivision()
{
	var numero1 = $("#numero1").val();
	var numero2 = $("#numero2").val();
	var op = "dividir";
	$.post("calculadorabasica.php", {numero1: numero1, numero2: numero2, op: op}, function(resultado){
		$("#resultadoBasico").val(resultado);
		}, "json");
}	
// Fin de las Funciones de la Calculadora Basica

//////////////////////////////////////////////////////

// Inicio de las Funciones de la Calculadora Cientifica
function CalcularSen()
{
	var numero3 = $("#numero3").val();
	var op = "sen";
	$.post("calculadoracientifica.php", {numero3: numero3, op: op}, function(resultado){
		$("#resultadoCientifico").val(resultado);
		}, "json");
}	
function CalcularCos()
{
	var numero3 = $("#numero3").val();
	var op = "cos";
	$.post("calculadoracientifica.php", {numero3: numero3, op: op}, function(resultado){
		$("#resultadoCientifico").val(resultado);
		}, "json");
}
function CalcularTan()
{
	var numero3 = $("#numero3").val();
	var op = "tan";
	$.post("calculadoracientifica.php", {numero3: numero3, op: op}, function(resultado){
		$("#resultadoCientifico").val(resultado);
		}, "json");
}
function CalcularElevado()
{
	var numero3 = $("#numero3").val();
	var op = "elevado";
	$.post("calculadoracientifica.php", {numero3: numero3, op: op}, function(resultado){
		$("#resultadoCientifico").val(resultado);
		}, "json");
}
function CalcularRaiz()
{
	var numero3 = $("#numero3").val();
	var op = "raiz";
	$.post("calculadoracientifica.php", {numero3: numero3, op: op}, function(resultado){
		$("#resultadoCientifico").val(resultado);
		}, "json");
}
function CalcularFactorial()
{
	var numero3 = $("#numero3").val();
	var op = "factorial";
	$.post("calculadoracientifica.php", {numero3: numero3, op: op}, function(resultado){
		$("#resultadoCientifico").val(resultado);
		}, "json");
}
// Fin de las Funciones de la Calculadora Cientifica