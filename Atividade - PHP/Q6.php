<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura média</title>
    <link rel="stylesheet" type="text/css" href="Qforms.css">
</head>
<body>

    <div class="box">
    <h1>Temperatura média</h1>

    <form action="Q6.php" method="post" >
    <label for="valor">Qual a sua temperatura?</label>
    <input type="number" name="number" id="idnumber" step="0.01" min="0" max="100" required>
    <button type="submit">Enviar</button>
    </form>

    <?php

    $v  = ($_POST["number"]);
    
    if($v>=37.8){
        echo "Você está com febre.";
    }else if($v>=36.7 && $v<37.8){
        echo "Você está febril.";
    }else if($v<=35){
        echo "Você está em estado de hipotermia.";
    } else {
        echo "Temperatura ideal";
    }
    
    ?>
    </div>

</body>
</html>