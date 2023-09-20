<?php
require_once '../poo/Persona.php';
require_once '../poo/Array.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de edades</title>
</head>
<body>
    <h1>Agregar invitado:</h1>    
    <form action ="" method="post">
        Nombre:
        <input type="text" name="nombre"/>
        <br>
        Edad:
        <input type="text" name="edad" id=""/>
        <br>
        <input type ="submit" value= "Enviar">
        <br>
    </form>
    <h2>Informacion enviada</h2>
    
    
    <h1>Resultados:</h1>   
   
    Promedio edades: <br>
    Edad más joven:<br>
    
    <?php
    
    echo "Total de personas: ". count($edad).'<br>';

    ?>
</body>
</html>