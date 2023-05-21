<?php

    if(isset(($_POST['programa'])) and !empty($_POST['nombre'])){


        session_start(); //iniciamos una session para poder llevar datos a otra pagina

        $Nombre = $_POST['nombre'];
        $Apellidos = $_POST['apellidos'];
        
        $_SESSION['nombre'] = $Nombre;
        $_SESSION['apellidos']= $Apellidos;

        $lenguajes = $_POST['programa'];
        $idioma = $_POST["idioma"];

        //condiciones para seber a que grupo pertenese segun los leguajes que conoce y su nivel de ingles
        $numero_lenguajes = count($lenguajes); // count => retorna el numero de elelmntos que hay dentro del array 
        
        if (($numero_lenguajes <= 2) and (($idioma == 1) or ($idioma == 2) or ($idioma == 3))) {
            //echo "Usted a sido aceptado en APOLO";
            header("Location:apolo.php");

        } else if ((($numero_lenguajes > 2) and ($numero_lenguajes <=4) ) and (($idioma == 1) or ($idioma == 2) or ($idioma == 3))) {
            //echo "Usted a sido aceptado en Artemis";
            header("Location:artemis.php");

        } else if (($numero_lenguajes > 4) and (($idioma == 1) or ($idioma == 2) or ($idioma == 3))) {
            //echo "Usted a sido aceptado en Spunik";
            header("Location:spunik.php");

        } else {
            header("Location:ningunGrupo.php");
            
        }

    } else {

        header("Location:index.php");
      
    }
?>