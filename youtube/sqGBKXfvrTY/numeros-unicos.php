<!DOCTYPE html>
<html>
<body>
<?php
//Funcion principal para generar numeros aleatorios.
function randomNumber($q) {
	//Inicializar el Array de numeros generados (pastNumbers).
	$pastNumbers = array("");
	for ($i = 1; $i <= $q; $i++) {
		echo "<h1>Iteration $i</h1><br>";
        //Generar un numero aleatorio de 0 a $q, siendo $q la variable de la funcion.
		$rNumber = rand(0,$q);
        //Mientras que el numero generado existe en la lista de numeros generados, generar un nuevo numero aleatorio.
		while (in_array($rNumber, $pastNumbers)) {
			$rNumber = rand(1,$q);
		}
        echo "<h2>Chosen number</h2>";
    	echo "$rNumber <br>";
        //Agregar el numero generado a la lista de numeros generados. 
		array_push($pastNumbers, $rNumber);
        echo "<h2>Array</h2>";
        //Imprimir cada elemento del Array de numeros generados.
		foreach ($pastNumbers as $element) {
			print $element;
			echo "<br>";
		}
        echo "<br>";
	}
}
//Llamada a la funcion de randomNumber con las iteraciones.
randomNumber(20);
?>
</body>
</html>
