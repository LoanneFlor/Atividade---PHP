<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" type="text/css" href="Qforms.css">
</head>
<body>

    <div class="box">
    <h1>Média</h1>

    <form action="Q1.php" method="post" >
    <label for="valor">Primeiro valor</label>
    <input type="number" name="number" id="idnumber" required>
    <label for="number">Segundo valor</label>
    <input type="number" name="number2" id="idnumber2" required>
    <label for="valor">Terceiro valor</label>
    <input type="number" name="number3" id="idnumber3" required>
    <label for="valor">Quarto valor</label>
    <input type="number" name="number4" id="idnumber4" required>
    <button type="submit">Calcular</button>
    </form>

    <?php

    $v  = ($_POST["number"]);
    $v1 = ($_POST["number2"]);
    $v2 = ($_POST["number3"]);
    $v3 = ($_POST["number4"]);

    
    $soma = $v + $v1 + $v2 + $v3;
    $media = $soma / 4;

    
    echo "<h4> A média é:</h4> " . number_format($media, 2, ',', '');

    ?>
    </div>

</body>
</html>



