<?php
    
    if(isset($_POST['nick'])){
        $nick = $_POST["nick"];
        echo $nick;
        mail();
     }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST">
            <input type="text" name="nick" value="">
            <button type="submit">Enviar</button>
        </form>        
    </body>
</html>