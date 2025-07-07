<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>

    <h1 class="a">Converta a temperatura Fahrenheit para Celsius aqui:</h1>
    <form action="Q2.php" method="post" class="b">
        <label for="fahrenheit" class="c">Temperatura em °C:</label>
        <input type="number" name="celsius" id="celsius" required>
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
                height: 100px;
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = $_POST['celsius'];
    $fahrenheit = ($celsius * 9 / 5) + 32;
    echo "<h4>Temperatura em Fahrenheit: " . round($fahrenheit, 2) . "°F</h4>";
}

?>