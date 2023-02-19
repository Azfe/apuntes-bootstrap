<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // DECLARAR VARIABLES OPTATIVO  
    $error = ''; // Para guardar los distintos errores
    $name = ''; // Para guardar el nombre
    $color = ''; // Para guardar el color
    $genre = ''; // Para guardar el género
    $course = ''; // Para guardar el género
    $valor = '';
    $myArray = '';

    // VALIDACIÓN NOMBRE
    if(empty($_POST["name"])){
        $error = "Ingresa un nombre </br>";
    }else{
        $name = $_POST["name"];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $name = trim($name);
        if($name == ''){
            $error .= "Nombre está vacío <br>";
        }
    }

    // VALIDACIÓN COLOR
    if(empty($_POST["color"])){
        $error .= "Selecciona un color </br>";
    }else{
        $color = $_POST["color"];
        $color = filter_var($color, FILTER_SANITIZE_STRING);
        $color = trim($color);
        if($color == ''){
            $error .= "Color está vacío <br>";
        }
    }
    
    // VALIDACIÓN GÉNERO
    if(empty($_POST["genre"])){
        $error .= "Selecciona un género </br>";
    }else{
        $genre = $_POST["genre"];
        $genre = filter_var($genre, FILTER_SANITIZE_STRING);
        $genre = trim($genre);
        if($genre == ''){
            $error .= "Color está vacío <br>";
        }
    }

    // VALIDACIÓN CURSO
    if(empty($_POST["course"])){
        $error .= "Selecciona un curso </br>";        
    }else{
        $course = $_POST["course"];

        foreach($course as $valor){ // Recorre el array
            $myArray .= $valor.', ';
        }

        $myArray = filter_var($myArray, FILTER_SANITIZE_STRING);        
    }

    // CUERPO DEL MENSAJE    
    $content = "Nombre: ";
    $content .= $name;
    $content .= "\n";
    
    $content .= "Color: ";
    $content .= $color;
    $content .= "\n";
    
    $content .= "Curso: ";
    $content .= $myArray;
    $content .= "\n";

    $content .= "Género: ";
    $content .= $genre;
    $content .= "\n";

    //DIRECCIÓN
    $sendTo = 'alexzapata1984@gmail.com';
    $issue = 'Nuevo mensaje de mi sitio web';

    // ENVIAR EMAIL
    if($error == ''){
        mail($sendTo, $issue, $content);
        echo 'exito';
    }else{
        echo $error;
    }
?>