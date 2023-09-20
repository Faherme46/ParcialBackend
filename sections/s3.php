<?

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
    <?php
    print_r($_POST)
    ?>
</body>
</html>