<?php



    $entero = "";

    // Verifica si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene el valor del campo "entero" del formulario
        $entero = $_POST["entero"];

        // Verifica si el valor es un entero de 4 dígitos
        if (preg_match("/^\d{4}$/", $entero)) {
            //echo '<script>alert("El entero ingresado es: ' . $entero . '");</script>';
            $digitos = str_split($entero);
            $numeros_enteros = array_map('intval', $digitos);
            $numeros_modificados = array_map(function ($numero) {
                return ($numero + 7)%10;
            }, $numeros_enteros);

            list($numeros_modificados[0], $numeros_modificados[2]) = array($numeros_modificados[2], $numeros_modificados[0]);
            list($numeros_modificados[1], $numeros_modificados[3]) = array($numeros_modificados[3], $numeros_modificados[1]);

            
            $texto_modificado = implode("", $numeros_modificados);
            echo '<script>alert("El entero encriptado es: ' . $texto_modificado . '");</script>';
            
    } else {
        echo '<script>alert("Por favor, ingresa un entero de 4 dígitos válido.");</script>';
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/s4.css">
    <script src="./js/index.js"></script>
    <title>Seccion 4</title>
</head>
<body>
<div><h1 class='divTitulo'>Seccion 1 </h1></div>
    <div class="formulario">
    <h1>Ingresa un entero de 4 dígitos</h1>
    <form method="post" action="s4.php">
        <input type="number" name="entero" min="1000" max="9999" required>
        <input type="submit" name="submit" value="Enviar">
    </form>


    </div>
</body>
</html>

<?php
?>
