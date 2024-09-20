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

foreach ($persona as $key => $value) {
    echo "$key : $value <br>";
} 