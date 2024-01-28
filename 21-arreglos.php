<?php

# Declarando arreglos

/*
$array1 = array("Elemento1", 2, "Elemento3", 25, 5.6);

echo "<pre>";
echo var_dump($array1[0]);
echo "<pre>";
*/

/*
$array2 = ["Elemento1", 20, "Elemento3", "Elemento4", true, false];

echo "<pre>";
echo var_dump($array2[5]);
echo "<pre>";
*/

$array3 = array(
    'nombre' => 'Joq',
    'edad' => 21,
    'telefono'=> 926833733,
    'estatura'=> 1.80
);

# Mostrar edad
echo $array3['edad'] . '<br>';


echo "<pre>";
echo var_dump($array3);
echo "<pre>";

# Agregar valor
$array3['email'] = 'already.5.35@gmail.com';

# Mostrar nuevo campo de "email"
echo $array3['email'] . '<br>';

# Modificar valores
$array3['edad'] = 24;

# Mostrar campo "edad" con nuevo valor
echo $array3['edad'] . '<br>';

# Eliminando campo de "email"
array_pop($array3);

echo "<pre>";
echo var_dump($array3);
echo "<pre>";

# Encontrar un valor en arreglo
var_dump(in_array(24, $array3));

?>