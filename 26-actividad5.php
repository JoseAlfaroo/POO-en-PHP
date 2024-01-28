<?php

# Mi final

class Persona{
    public $nombre;
    public $edad;

    public function imprimir(){
        echo "Nombre: " . $this -> nombre . "<br>";
        echo "Edad: " . $this -> edad . "<br>";
    }

    public function __construct($nombre, $edad){
        $this -> nombre = $nombre;
        $this -> edad = $edad;
    }

}

class Ciudadano extends Persona{
    public $deposito;

    public function imprimir(){
        echo parent :: imprimir();
        echo "Depósito: " . $this -> deposito . "<br>";
        echo $this -> impuestos();
    }

    public function __construct($nombre, $edad, $deposito){
        parent :: __construct($nombre, $edad);
        $this -> deposito = $deposito;
    }

    public function impuestos(){
        if($this -> deposito > 3000){
            echo "El ciudadano ". $this -> nombre . " debe pagar impuestos<br><br>";
        }
        else{
            echo "El ciudadano ". $this -> nombre . " no debe pagar impuestos<br><br>";
        }
    }

}

$ciudadano = new Ciudadano("Mariano", 25, 5700);
echo $ciudadano->imprimir();

$ciudadano = new Ciudadano("Leonel", 56, 3500);
echo $ciudadano->imprimir();

$ciudadano = new Ciudadano("Yaneth", 34, 8400);
echo $ciudadano->imprimir();

$ciudadano = new Ciudadano("Martín", 45, 2500);
echo $ciudadano->imprimir();


# Resultados

/*

Nombre: Mariano
Edad: 25
Depósito: 5700
El ciudadano Mariano debe pagar impuestos

Nombre: Leonel
Edad: 56
Depósito: 3500
El ciudadano Leonel debe pagar impuestos

Nombre: Yaneth
Edad: 34
Depósito: 8400
El ciudadano Yaneth debe pagar impuestos

Nombre: Martín
Edad: 45
Depósito: 2500
El ciudadano Martín no debe pagar impuestos

*/

?>