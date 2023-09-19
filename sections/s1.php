<?php
while (true) {
    // Leer la entrada
    $miPiscina = fscanf(STDIN, "%d %d %d");
    $vecinoPiscina = fscanf(STDIN, "%d %d %d");
    
    list($litrosMiPiscina, $litrosBalde, $perdidaMiPiscina) = $miPiscina;
    list($litrosVecinoPiscina, $litrosVecinoBalde, $perdidaVecinoPiscina) = $vecinoPiscina;
    
    echo "Datos de mi piscina: " . implode(" ", $miPiscina) . "\n";
    echo "Datos de la piscina del vecino: " . implode(" ", $vecinoPiscina) . "\n";
    
    // Verificar si alguna piscina ya está llena
    if ($litrosMiPiscina == 0 || $litrosVecinoPiscina == 0) {
        break;
    }

    // Calcular los viajes necesarios para llenar las piscinas
    $viajesYo = ceil($litrosMiPiscina / ($litrosBalde - $perdidaMiPiscina));
    $viajesVecino = ceil($litrosVecinoPiscina / ($litrosVecinoBalde - $perdidaVecinoPiscina));
    
    echo "Viajes necesarios para mi piscina: " . $viajesYo . "\n";
    echo "Viajes necesarios para la piscina del vecino: " . $viajesVecino . "\n";
    
    // Determinar el ganador
    if ($viajesYo < $viajesVecino) {
        echo "YO " . $viajesYo . "\n";
    } elseif ($viajesVecino < $viajesYo) {
        echo "VECINO " . $viajesVecino . "\n";
    } else {
        echo "EMPATE\n";
    }
}
?>
