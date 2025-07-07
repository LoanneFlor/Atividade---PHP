<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" type="text/css" href="Calc.css">
</head>
<body>

    <h2>CALCULADORA</h2>
    <div class="box">
    <form action="Calc1.php" method="post">
        <input type="number" class="num" name="a" placeholder="Digite o primeiro número">
        <input type="number" class="num" name="b" placeholder="Digite o segundo número">
        <select class="op" name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input class="bt"  type="submit" value="Calcular">

    </form>
    </div>

    <?php
    
        $a = $_POST['a'];
        $b = $_POST['b'];
        $op = $_POST['op'];

        if (is_numeric($a) && is_numeric($b)) {
            switch ($op) {
                case '+':
                    $resultado = $a + $b;
                    break;
                case '-':
                    $resultado = $a - $b;
                    break;
                case '*':
                    $resultado = $a * $b;
                    break;
                case '/':
                    if ($b != 0) {
                        $resultado = $a / $b;
                    } else {
                        echo "<h4>Divisão por zero não é permitida.</h4>";
                    }
                    break;
                default:
                    echo "<h4>Operador inválido.</h4>";
                    exit;
            }
            echo "<h4>Resultado: " . $resultado; "</h4>";
        } else {
            echo "<h4>Por favor, insira números válidos.</h4>";
        }
    
    ?>
</body>
</html>




