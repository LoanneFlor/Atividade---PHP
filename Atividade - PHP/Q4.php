<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maioridade</title>
    <link rel="stylesheet" type="text/css" href="Qforms.css">
</head>
<body>

    <div class="box">
    <h1>Maioridade</h1>

    <form action="Q4.php" method="post" >
    <label for="valor">Qual a sua idade?</label>
    <input type="number" name="number" id="idnumber" required>
    <button type="submit">Enviar</button>
    </form>

    <?php

    $v  = ($_POST["number"]);
    
    if($v>=18){
        echo "Já chegou à maioridade.";
    }else{
        $f = 18 - $v;
        echo "Ainda faltam " .$f. " anos para a maior idade.";
    }
    
    ?>
    </div>

</body>
</html>