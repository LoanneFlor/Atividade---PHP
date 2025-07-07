<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
    <link rel="stylesheet" href="Qforms.css">
</head>
<body>
    <form action="Q13.php" method="post">
    <label for="">Digite o texto:</label>
    <input type="text" name="t">
    <button type="submit" name="exibir">Exibir</button>
</form>

<?php

function escreva($texto){
    echo "O texto é: " . $texto . ".";
}

if (isset($_POST["exibir"])) {
    $a = $_POST["t"];
    escreva($a);
}

?>

</body>
</html>