<?php

# Clase padre
class SeleccionFutbol{
    public $id;
    public $nombre;
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

echo $jugador1 -> concentrarse();
echo $jugador1 -> viajar();

echo $entrenador1 -> dirigirPartido();
echo $entrenador1 -> viajar();

?>