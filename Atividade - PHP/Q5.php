<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velocidade</title>
    <link rel="stylesheet" type="text/css" href="Qforms.css">
</head>
<body>

    <div class="box">
    <h1>Velocidade</h1>

    <form action="Q5.php" method="post" >
    <label for="valor">Qual a velocidade?</label>
    <input type="number" name="number" id="idnumber" step="0.01" required>
    <button type="submit">Enviar</button>
    </form>

    <?php

    $v  = ($_POST["number"]);
    
    if($v>110){
        echo "O veículo excedeu a velocidade máxima permitida.";
    }else {
        echo "O veículo não excedeu a velocidade máxima permitida.";
    }
    
    ?>
    </div>

</body>
</html>