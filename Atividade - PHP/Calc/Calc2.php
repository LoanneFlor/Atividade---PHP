<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calculadora</title>
    <link rel="stylesheet" type="text/css" href="Calc.css" />
</head>
<body>

    <h2>CALCULADORA</h2>
    <div class="box">
        <form action="Calc2.php" method="get">
            <input type="number" class="num" name="a" placeholder="Digite o primeiro número" required />
            <input type="number" class="num" name="b" placeholder="Digite o segundo número" required />
            <select class="op" name="op" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="hidden" name="calc" value="1" />
            <input class="bt" type="submit" value="Calcular" />
        </form>
    </div>

    <?php
    if (isset($_GET['calc'])) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $op = $_GET['op'];

        if ($op == '+') {
            $resultado = $a + $b;
        } elseif ($op == '-') {
            $resultado = $a - $b;
        } elseif ($op == '*') {
            $resultado = $a * $b;
        } elseif ($op == '/') {
            if ($b != 0) {
                $resultado = $a / $b;
            } else {
                echo "<h4>Divisão por zero não é permitida.</h4>";
                exit;
            }
        } else {
            echo "<h4>Operação inválida.</h4>";
            exit;
        }

        echo "<h4>Resultado: $resultado</h4>";
    }
    ?>

</body>
</html>

</html>




