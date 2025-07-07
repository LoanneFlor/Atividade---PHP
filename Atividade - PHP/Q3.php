<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
    <link rel="stylesheet" type="text/css" href="Qforms.css">
</head>
<body>

    <div class="box">
    <h1>Par ou Ímpar</h1>

    <form action="Q3.php" method="post" >
    <label for="valor">Digite um número:</label>
    <input type="number" name="number" id="idnumber" required>
    <button type="submit">Descobrir paridade</button>
    </form>

    <?php

    $v  = ($_POST["number"]);
    
    $pi = $v%2;
    if($pi==0){
        echo "O número é par.";
    }else{
        echo "O número é ímpar.";
    }
    
    ?>
    </div>

</body>
</html>