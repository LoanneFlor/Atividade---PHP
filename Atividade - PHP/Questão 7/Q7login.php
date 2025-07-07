<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Q7s.css">
</head>
<body>

    <div class="cad">
    <h1 class="logo2">LOGIN</h1>
    <h1 class="logo1">LOGIN</h1>

    <form method="post">
    <label for="fahrenheit" class="l">Nome completo:</label>
    <input type="text" class="i" name="nome" id="nome" required>
    <button type="submit" name="cadastrar" class="bt">Cadrastrar</button>
    </form>
    </div>

<?php
if (isset($_POST['cadastrar'])) {
    header("Location: Q7menu.php");
    exit();
}
?>

</body>
</html>