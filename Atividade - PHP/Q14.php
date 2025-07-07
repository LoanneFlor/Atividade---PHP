<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
    <link rel="stylesheet" href="Qforms.css">
</head>
<body>
    <form action="Q14.php" method="post">
        <label for="">Digite o primeiro número</label>
        <input type="number" name="num1">
        <label for="">Digite o segundo número</label>
        <input type="number" name="num2">
        <button type="submit" name="calc">Calcular</button>
    </form>

    <?php

    $a = $_POST["num1"];
    $b = $_POST["num2"];

    function soma($a, $b){
        $s = $a + $b;
        echo "O resultado é " . $s . ".";
    }

    If(isset($_POST["calc"])){
    soma($a, $b);
    }

    ?>

</body>
</html>