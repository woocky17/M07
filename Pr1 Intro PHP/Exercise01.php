<?php

/*
1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
variables y los resultados de sus operaciones.
*/
$num1 = rand(1,100);
$num2 = rand(1,100);

echo "Numero 1: ".$num1. "<br>";
echo "Numero 2: ".$num2. "<br>". "<br>";

$sum = $num1 + $num2;
$res = $num1 - $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;

echo "Suma: ".$sum. "<br>";
echo "Resta: ".$res. "<br>";
echo "Multiplicacion: ".$mul. "<br>";
echo "Division: ".$div. "<br>";






/*
2. Muestra cuál es mayor, cuál menor o si son iguales.
*/
echo "<br>";
if ($num1 > $num2) {
    echo "El numero 1 es mayor que el numero 2". "<br>";
}
elseif ($num1 < $num2){
    echo "El numero 1 es menor que el numero 2". "<br>";
}
else {
    echo "Los dos numeros son iguales". "<br>";
}

/*
3. Si las dos variables son valores superiores a 1,
a. calcula el área del triángulo con base y altura igual a los valores de las
variables. 
*/
echo "<br>";

if ($num1 > 1 & $num2 > 1) {
    $area = ($num1 * $num2) / 2;

    echo "Area del triangulo: ".$area ;
}
else{
    echo "Los numeros no son mayores a 1" ;
}
?>