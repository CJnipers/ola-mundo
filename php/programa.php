
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $total = $_POST['seg'] ?? 0;
?>

    <main>
        <h1> Olá usuario sejá bem vindo a nossa Calculadora do tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="seg">Qual é o número total de Segundos?</label>
            <input type="number" name="seg" id="seg" min="0"
             step="1" required value="<?$total?>" >
            <input type="submit" value="Calcular">
        </form>
    </main>
<?php
$sobra = $total;
$semana = (int)($sobra / 604_800);
$sobra =$sobra % 604_800;

$dia = (int)($sobra / 86_400);
$sobra =$sobra % 86_400;

$hora = (int)($sobra / 3_600);
$sobra =$sobra % 3_600;

$minuto = (int)($sobra / 60);
$sobra =$sobra % 60;

$segundo = $sobra ;
?>
    <section>
 

        <h2>Totalizando tudo</h2>
        <p>Analizando o valor que voçê digitou, <?=$total?> segundos
            equivalem a um total de: 
        </p>
        <ul>
            <li><?=$semana?> Semanas</li>
            <li><?=$dia?> Dias</li>
            <li><?=$hora?> Horas</li>
            <li><?=$minuto?> Minutos</li>
            <li><?=$segundo?> Segundos</li>
        </ul>
    </section>
</body>
</html>