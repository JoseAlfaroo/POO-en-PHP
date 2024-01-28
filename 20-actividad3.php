
<?php

    function verificar($nom, $edad){

        $verificacion = "";

        echo "Nombre: " . $nom . "<br>" . "Edad: " . $edad ."<br>";

        if($edad >= 18){
            $verificacion = "Estimado(a) " . $nom . " usted ya puede votar.";
        }

        else{
            $verificacion = "Estimado(a) " . $nom . " usted no puede votar, aún es menor de edad.";
        }

        if($edad < 0){
            $verificacion = "Ingrese una edad válida";
        }

        return $verificacion;

    }

    function impr($msg){
        echo $msg . "<br><br>";
    }

    $msg = verificar("Ashley", 14);
    impr($msg);

    $msg = verificar("Luis Camilo", 20);
    impr($msg);

    $msg = verificar("Fernando", 16);
    impr($msg);

    $msg = verificar("Jorge", 22);
    impr($msg);
    
    
    /*

    # Resultados

    Nombre: Ashley
    Edad: 14
    Estimado(a) Ashley usted no puede votar, aún es menor de edad.

    Nombre: Luis Camilo
    Edad: 20
    Estimado(a) Luis Camilo usted ya puede votar.

    Nombre: Fernando
    Edad: 16
    Estimado(a) Fernando usted no puede votar, aún es menor de edad.

    Nombre: Jorge
    Edad: 22
    Estimado(a) Jorge usted ya puede votar.
    
    */

?>
