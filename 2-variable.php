<?php

$nombre = "Jose";
$edad = 20;
$altura = 1.72;
$casado = true;

#Los puntos (.) solo para concatenar
#Las comas (,) separan argumentos (en caso de usar echo, estas establecen el orden en que se muestran los elementos en la salida    )

#Tipos de datos primitivos (escalares)

/* String */
echo "Nombre: ". $nombre. "<br>";
echo "Tipo de dato y valor: ", var_dump($nombre). "<br>". "<br>";

/* Integer */
echo "Edad: ". $edad. "<br>";
echo "Tipo de dato y valor: ", var_dump($edad). "<br>". "<br>";

/* Float */
echo "Altura: ". $altura. "<br>"; 
echo "Tipo de dato y valor: ", var_dump($altura). "<br>". "<br>";

/* Boolean */
echo "¿Casado?: ". $casado . "<br>";
echo "Tipo de dato y valor: ", var_dump($casado). "<br>". "<br>";


?>