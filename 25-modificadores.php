<?php

# Clase padre

/*
Public - Se puede acceder desde objeto o clase
Protected - Se puede acceder únicamente en la clase y subclases
Private - Se puede acceder únicamente desde la clase que lo contiene
*/

class SeleccionFutbol{
    public $id;
    private $nombre;
    public $edad;

    public function __construct($id, $nombre, $edad ){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function concentrarse(){
        echo $this -> nombre . " está concentrado<br>";
    }

    public function viajar(){
        echo $this -> nombre . " está viajando<br>";
    }

    public function getNombre(){
        return $this -> nombre;
    }

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }


}


# Clase hija
class Jugador extends SeleccionFutbol{
    # Propiedades
    public $posicion;
    public $numero;

    # Constructor
    public function __construct($id, $nombre, $edad, $posicion, $numero){
        parent :: __construct($id, $nombre, $edad);
        $this -> posicion = $posicion;
        $this -> numero = $numero;
    }

    # Metodos
    public function entrenar(){
        echo "El jugador " . $this -> nombre ." está entrenando<br>";
    }

    public function jugar(){
        echo "El jugador " . $this -> nombre ." está jugando<br>";
    }
}

class Entrenador extends SeleccionFutbol{
    public $experiencia;
    public function __construct($id, $nombre, $edad, $experiencia){
        parent :: __construct($id, $nombre, $edad);
        $this -> experiencia = $experiencia;
    }

    public function dirigirEntrenamiento(){
        echo "El entrenador " . $this -> nombre ." está dirigiendo el entrenamiento<br>";
    }

    public function dirigirPartido(){
        echo "El entrenador " . $this -> nombre ." está dirigiendo el juego<br>";
    }
}


$jugador1 = new Jugador(123, "Juan", 25, "Delantero", 3);
$entrenador1 = new Entrenador(245, "Miguel", 65, 10);


/* Public
echo $jugador1 -> nombre;
*/

/* Protected
# Obtener nombre
echo $jugador1 -> getNombre() . "<br>";

# Modificar nombre
$jugador1 -> setNombre("Pablo") . "<br>";

# Obtener nuevo nombre
echo $jugador1 -> getNombre() . "<br>";
*/

/* Private
echo $jugador1 -> getNombre() . "<br>";
*/

?>