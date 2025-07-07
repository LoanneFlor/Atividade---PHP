<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio da Lanchonete</title>
    <link rel="stylesheet" type="text/css" href="Q7m.css">
</head>
<body>

      <h1>Boas-vindas à nossa Lanchonete</h1>

  <div class="s">

    <div class="card">
      <img src="https://www.sabornamesa.com.br/media/k2/items/cache/bf26253d7b8f171dddb155f84ce1d562_XL.jpg" alt="X-Burguer">
      <div class="card-text">
        <h2>X-BURGUER</h2>
        <p>Um clássico que nunca decepciona! Hambúrguer suculento, queijo derretido, molho especial e pão fresquinho. Simples, direto ao ponto e delicioso em cada mordida.</p>
      </div>
    </div>

    <div class="card">
      <img src="https://embutidosbonatti.ind.br/temp/xxx-57-1920x1080m1.jpg" alt="X-Bacon">
      <div class="card-text">
        <h2>X-BACON</h2>
        <p>O lanche dos apaixonados por bacon! Carne saborosa, queijo cremoso e tiras generosas de bacon crocante. Um estouro de sabor do início ao fim.</p>
      </div>
    </div>

    <div class="card">
      <img src="https://conteudo.imguol.com.br/c/entretenimento/17/2023/05/24/x-tudo-brasileiro-tem-variedade-de-ingredientes-de-acordo-com-preferencias-regionais-aqui-versao-com-carne-bovina-tomato-salsicha-presunto-bacon-e-queijo-no-pao-1684938396547_v2_4x3.jpg" alt="X-Tudo">
      <div class="card-text">
        <h2>X-TUDO</h2>
        <p>É muita coisa boa junta! Hambúrguer, queijo, presunto, ovo, salsicha, bacon, alface, tomate e molho. Um exagero delicioso que vale cada mordida.</p>
      </div>
    </div>

    <div class="card">
      <img src="https://img.cybercook.com.br/receitas/151/x-salada-3.jpeg" alt="X-Salada">
      <div class="card-text">
        <h2>X-SALADA</h2>
        <p>Leve, fresco e irresistível! Hambúrguer, queijo, alface, tomate e molho. Um lanche equilibrado, com sabor de sobra para conquistar seu paladar.</p>
      </div>
    </div>

    <div class="card">
      <img src="https://i.pinimg.com/736x/32/b1/e9/32b1e996e154219ce61ad20c224ab391.jpg" alt="X-Frango">
      <div class="card-text">
        <h2>X-FRANGO</h2>
        <p>Filé de frango grelhado, queijo, alface e molho especial. Leve e marcante, é o lanche perfeito para quem ama frango com sabor e textura irresistíveis.</p>
      </div>
    </div>

    <div class="card">
      <img src="https://s2-receitas.glbimg.com/_GkYC8FQvE7JNZoILsLV7BvmD-I=/0x0:1000x750/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_1f540e0b94d8437dbbc39d567a1dee68/internal_photos/bs/2024/t/d/W4TOLSQxAXiLig8w82IA/batata-frita-sequinha.jpg" alt="Batata Frita">
      <div class="card-text">
        <h2>BATATA FRITA</h2>
        <p>Crocantes, douradas e irresistíveis. A porção perfeita para acompanhar qualquer lanche ou matar aquela vontade de algo salgado e delicioso.</p>
      </div>
    </div>

    <form method="post">
  <label for="ico">Escolha seu pedido:</label>
  <select name="comida" id="ico">
    <option value="">-- Selecione um lanche --</option>
    <option value="X-BURGER">X-BURGUER</option>
    <option value="X-BACON">X-BACON</option>
    <option value="X-TUDO">X-TUDO</option>
    <option value="X-SALADA">X-SALADA</option>
    <option value="X-FRANGO">X-FRANGO</option>
    <option value="BATATA FRITA">BATATA FRITA</option>
  </select>
  <button type="submit" name="pedido">Fazer pedido</button>
    </form>

  </div>

<?php

if (isset($_POST['pedido'])) {

    $comida = $_POST['comida'];

    $precos = [
        "X-BURGER" => 15.00,
        "X-BACON" => 18.00,
        "X-TUDO" => 22.00,
        "X-SALADA" => 16.00,
        "X-FRANGO" => 17.00,
        "BATATA FRITA" => 10.00
    ];

    if (array_key_exists($comida, $precos)) {
        echo "<p>Você pediu um <strong>$comida</strong>. Valor: R$ " . number_format($precos[$comida], 2, ',', '.') . "</p>";
    } else {
        echo "<p style='color:black;'>⚠️ Selecione um lanche para fazer o pedido.</p>";
    }
}
?>

</body>
</html>
