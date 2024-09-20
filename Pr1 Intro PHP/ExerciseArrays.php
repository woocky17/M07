<?php
/*
Crea un array asociaƟvo con los siguientes datos y claves.
nombre: Sara, apellido: Marơnez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior uƟlizando foreach. 
*/

echo "
Crea un array asociaƟvo con los siguientes datos y claves.
nombre: Sara, apellido: Marơnez, edad: 23, ciudad: Barcelona<br>
Muestra los valores del array anterior uƟlizando foreach. 
<br><br>";
$persona = array(
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

foreach ($persona as $value) {
    echo "$value <br>";
}

/*
Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
foreach. 
 
*/

echo " <br>
Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
foreach. 
<br><br>";
$persona = array(
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

foreach ($persona as $key => $value) {
    echo "$key : $value <br>";
} 

/*
Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.
*/

echo "<br>
Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.
<br><br>";
$persona = array(
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

$persona["edad"] = 24;

foreach ($persona as $key => $value) {
    echo "$key : $value <br>";
}

/*
Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump. 
*/

echo "<br>Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump. <br>";

