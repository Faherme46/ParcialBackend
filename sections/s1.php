<?php
// Función para llenar la piscina y determinar quién tarda menos
function llenarPiscina($nuestraPiscina, $balde, $perdidaNuestra, $piscinaVecino, $baldeVecino, $perdidaVecino) {
    $viajesNuestros = 0;
    $viajesVecino = 0;

    while (true) {
        // Llenamos nuestra piscina
        $nuestraPiscina += $balde;
        $viajesNuestros++;

        // Verificamos si ya está llena o si necesitamos hacer otro viaje
        if ($nuestraPiscina >= $piscinaVecino) {
            return ["YO", $viajesNuestros];
        } else {
            // El vecino también llena su piscina
            $piscinaVecino += $baldeVecino;
            $viajesVecino++;

            // Verificamos si ya está llena o si necesitamos hacer otro viaje
            if ($piscinaVecino >= $nuestraPiscina) {
                return ["VECINO", $viajesVecino];
            }
        }

        // Verificamos si ocurrió una división por 0 (evitamos un ciclo infinito)
        if ($balde == 0 || $baldeVecino == 0) {
            return ["EMPATE", -1];
        }
    }
}

$ganador = "";
$numViajes = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener datos del formulario
    $litrosNuestraPiscina = $_POST["litrosNuestraPiscina"];
    $litrosBalde = $_POST["litrosBalde"];
    $perdidaNuestra = $_POST["perdidaNuestra"];
    $litrosPiscinaVecino = $_POST["litrosPiscinaVecino"];
    $litrosBaldeVecino = $_POST["litrosBaldeVecino"];
    $perdidaVecino = $_POST["perdidaVecino"];

    // Llamamos a la función para determinar el ganador y el número de viajes
    $resultado = llenarPiscina($litrosNuestraPiscina, $litrosBalde, $perdidaNuestra, $litrosPiscinaVecino, $litrosBaldeVecino, $perdidaVecino);

    // Guardar el resultado en variables
    $ganador = $resultado[0];
    $numViajes = $resultado[1];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Llenando Piscinas</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Llenando Piscinas</h1>
    <div class="divForm">
    <form method="post">
        <label>Litros de nuestra piscina:</label>
        <input type="number" name="litrosNuestraPiscina" required><br>
        
        <label>Litros del balde:</label>
        <input type="number" name="litrosBalde" required><br>
        
        <label>Pérdida de nuestra piscina durante el viaje:</label>
        <input type="number" name="perdidaNuestra" required><br>
        
        <label>Litros de la piscina del vecino:</label>
        <input type="number" name="litrosPiscinaVecino" required><br>
        
        <label>Litros del balde del vecino:</label>
        <input type="number" name="litrosBaldeVecino" required><br>
        
        <label>Pérdida de la piscina del vecino durante el viaje:</label>
        <input type="number" name="perdidaVecino" required><br>
        
        <input type="submit" value="Calcular">
    </form>
    </div>
    
    <?php
    // Mostrar el resultado solo si se ha calculado
    if ($ganador !== "") {
        echo "<h2>Resultado:</h2>";
        if ($ganador === "YO") {
            echo "¡Ganaste! Realizaste $numViajes viajes para llenar la piscina.";
        } elseif ($ganador === "VECINO") {
            echo "El vecino ganó. Realizó $numViajes viajes para llenar su piscina.";
        } else {
            echo "Hubo un empate. Ambos llenaron sus piscinas al mismo tiempo.";
        }
    }
    ?>
</body>
</html>
