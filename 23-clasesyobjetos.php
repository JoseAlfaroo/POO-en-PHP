<?php
    # Clase
    class Jugador{
        # Propiedades
        public $nombre;
        public $posicion;
        public $numero;

        # Constructor
        public function __construct($nombre, $posicion, $numero){
            $this -> nombre = $nombre;
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

    # Instancia
    $jugador1 = new Jugador("Pepelucho", "Delantero", 7);
    $jugador1 -> entrenar();

    echo "<pre>";
    echo var_dump($jugador1);
    echo "</pre>";


    # Instancia
    $jugador2 = new Jugador("Esqueleto", "Arquero", 1);
    $jugador2 -> jugar();


    echo "<pre>";
    echo var_dump($jugador2);
    echo "</pre>";

?>