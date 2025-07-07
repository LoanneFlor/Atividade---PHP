<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Idade</title>
    
</head>
<body>

<?php

$me = isset($_POST['me']) ? (int)$_POST['me'] : 0;
$ma = isset($_POST['ma']) ? (int)$_POST['ma'] : 0;

if (isset($_POST['idade'])) {
    $idade = (int)$_POST['idade'];

    if ($idade < 1) {
        
        echo "<p>Total com menos de 18 anos: $me</p>";
        echo "<p>Total com mais de 65 anos: $ma</p>";
        
        exit;
    }

    if ($idade < 18) {
        $me++;
    } elseif ($idade > 65) {
        $ma++;
    }
}
?>

<form method="post" action="Q10.php">
    <label>Qual a sua idade?</label>
    <input type="number" name="idade" required min="0" autofocus>
    <input type="hidden" name="me" value="<?php echo $me; ?>">
    <input type="hidden" name="ma" value="<?php echo $ma; ?>">
    <button type="submit">Enviar</button>
</form>

</body>
</html>
