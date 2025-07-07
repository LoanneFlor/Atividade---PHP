<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Q7s.css">
</head>
<body>
    <h1 class="logo">LANCHONETE</h1>
    <h1>LANCHONETE</h1>

    <form method="post">
    <button type="submit" name="enviar">login</button>
    </form>

<?php
if (isset($_POST['enviar'])) {
    header("Location: Q7login.php");
    exit();
}
?>

</body>
</html>