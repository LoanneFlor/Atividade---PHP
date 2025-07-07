<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>

    <h1 class="a">Calcular a área do retângulo:</h1>
    <form action="Q15.php" method="post" class="b">
        <label for="base" class="c">Base:</label>
        <input type="number" name="base" id="idbase" required>
         <label for="altura" class="c">Altura:</label>
        <input type="number" name="altura" id="idalt" required>
        <button type="submit" class="e">Calcular</button>

        <style>

            .a {
                color: black;
                font-size: 20px;
                font-weight: normal;
                font-family: times, sans-serif;
                margin: 20px;
                border: solid 1px black;
                padding: 10px;
                text-align: left;
                width: 300px;
            }

            .b {
                color: black;
                font-size: 20px;
                font-family: times, sans-serif;
                margin: 20px;
                border: solid 1px black;
                padding: 10px;
                position: relative;
                height: 170px;
                width: 300px;
            }

            .c {
                color: black;
                font-size: 20px;
                font-weight: normal;
                font-family: times, sans-serif;
                padding: 5px;
                text-align: left;
            }

            input {
                padding: 5px;
                font-size: 16px;
                margin-top: 10px;
                text-align: left;
                display: block;
            }

            button {
                padding: 5px;
                font-size: 16px;
                margin-top: 10px;
                display: block;
            }

        </style>   

</body>
</html>


<?php
function calculaAreaRetangulo($largura, $altura) {
    return $largura * $altura;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $b = $_POST['base'];
    $alt = $_POST['altura'];
    $area = calculaAreaRetangulo($b, $alt);
    echo "<h4>Área: " . $area . "m<sup>2</sup></h4>";
}
?>