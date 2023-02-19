<?php
    $error = '';
    $name = '';
    $email = '';
    $message = '';

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

    // VALIDACIÓN EMAIL
    if(empty($_POST["email"])){
        $error .= "Ingresa un email </br>";
    }else{
        $email = $_POST["email"];
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error .= "Ingresa un email válido </br>";
        }else{
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        }
    }

    // VALIDACIÓN MENSAJE
    if(empty($_POST["message"])){
        $error .= "Ingresa un mensaje </br>";
    }else{
        $message = $_POST["message"];
        $message = filter_var($message, FILTER_SANITIZE_STRING);
        $message = trim($message);
        $message = trim($message);
        if($message == ''){
            $error .= "Mensaje está vacío <br>";
        }
    }

    // CUERPO DEL MENSAJE
    //$content = 'Nombre: '.$name.'\n';
    $content = "Nombre: ";
    $content .= $name;
    $content .= "\n";
    
    //$content .= 'Email: '.$email.'\n';
    $content .= "Email: ";
    $content .= $email;
    $content .= "\n";
    
    //$content .= 'Mensaje: '.$message.'\n';
    $content .= "Mensaje: ";
    $content .= $message;
    $content .= "\n";

    //DIRECCIÓN
    $sendTo = 'alexzapata1984@gmail.com';
    $issue = 'Nuevo mensaje de mi sitio web';

    // ENVIAR EMAIL
    if($error == ''){
        $success = mail($sendTo, $issue, $content, 'de: '.$email);
        echo 'exito';
    }else{
        echo $error;
    }
?>