<?php

/*
function saludo($nombre){
    echo "Ojalá que te mueras " . $nombre . "<br>";
}

saludo("Joque");
saludo("Jose");
saludo("Spike");

*/

function calc($num1, $num2, $operador){
    
    if($operador == "+" || $operador == "-" || $operador == "*"|| $operador == "/"){
        
        $resultado = 0;

        switch ($operador) {
            case "+":
                $resultado = $num1 + $num2;
                break;
            case "-";
                $resultado = $num1 - $num2;
                break;
            case "*":
                $resultado = $num1 * $num2;
                break;
            case "/":
                $resultado = $num1 / $num2;
                break;
            default:
                echo "Operación no encontrada";
        }

        return $num1 . " " . $operador . " " . $num2 . " = " . $resultado;
    
    }

    else{
        return "Operador no válido";
    }

}

function impr($msg){
    echo $msg ."<br>";
}

$num1 = 40;
$num2 = 12;
$operador = "/";

$msg = calc($num1, $num2, $operador);

impr($msg);

?>