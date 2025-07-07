<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="Q12.php" method="POST">
    <label for="text">Digite um nome:</label>
    <input type="text" name="v1" id="idvetor">
</br>
    <label for="text">Digite um nome:</label>
    <input type="text" name="v2" id="idvetor">
</br>
    <label for="text">Digite um nome:</label>
    <input type="text" name="v3" id="idvetor">
</br>
    <label for="text">Digite um nome:</label>
    <input type="text" name="v4" id="idvetor">
</br>
    <label for="text">Digite um nome:</label>
    <input type="text" name="v5" id="idvetor">
</br>
    <button type="submit" name="bt">Enviar</button>
    </form>

    <?php

    if(isset($_POST["bt"])){
    $v1 = ($_POST["v1"]);
    $v2 = ($_POST["v2"]);
    $v3 = ($_POST["v3"]);
    $v4 = ($_POST["v4"]);
    $v5 = ($_POST["v5"]);
   
     if (!is_numeric($v1) && !is_numeric($v2) && !is_numeric($v3) && !is_numeric($v4) && !is_numeric($v5)) {
        $n = array($v1, $v2, $v3, $v4, $v5);
        echo "Os nomes são: " . implode(", ", $n);
    } else {
        echo "Digite apenas nomes!";
    }
    }

    

    ?>

</body>
</html>