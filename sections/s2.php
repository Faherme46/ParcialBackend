<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Son numeros amigos?</title>
</head>
<body>
    <h1>Por favor ingresa los numeros que quieras saber si son "numeros amigos"</h1>
    <br>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        Numero_1:
        <input type="text" name="num1" required>
        <br>
        Numero_2:
        <input type="text" name="num2" required>
        <br>
        <input type="submit" name="sumbit" value="Confirmar">
    </form>
    <h1>Resultado: </h1>
    <?php
    if(isset($_POST['sumbit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $div1 =[];
        $div2 =[];
        $sum_num1 = 0;
        $sum_num2 = 0;
        for ($i = 1; $i < $num1; $i++){
            if ($num1 % $i==0){
                $div1[] = $i;
            }
        }
        for ($e = 1; $e < $num1; $e++){
            if ($num2 % $e==0){
                $div2[] = $e;
            }
        }
        $sum_num1 = array_sum($div1);
        $sum_num2 = array_sum($div2);
        echo '<br>';
        if (($num1 == $sum_num2) && ($num2 == $sum_num1)){
            echo("Los numeros ingresados son Numeros amigos");
        }else{
            echo("Los numeros ingresados no son Numeros amigos");
        }
    }
    ?>
</body>
</html>