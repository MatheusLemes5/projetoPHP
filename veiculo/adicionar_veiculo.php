<?php
 include_once('../componentes/cabecalho.php');
?>
    <title>Cadastrar Veiculo</title>
</head>
<body>
<?php require('../componentes/header.php') ?>
<main>
    <section>
    <form action="logica_veiculos.php" method="post">
    <p><label for="ano">Ano: <input type="text" name="ano" id="ano">
      <p><label for="marca">Marca: </label><input type="text" name="marca" id="marca"></p>
      <p><label for="modelo">Modelo: </label><input type="text" name="modelo" id="modelo"></p>
      <p><label for="quilometragem">Quilometragem: <input type="text" name="quilometragem" id="quilometragem">
      <p><label for="adicionais">Adicionais: <input type="text" name="adicionais" id="adicionais">
      <p><label for="valor">Valor: <input type="text" name="valor" id="valor">
      <p><label for="contato">Contato: <input type="text" name="contato" id="contato">
      <p><button type="submit" id='cadastrar' name='cadastrar' value="Cadastrar"> Cadastrar </button>  </p>      
    </form>
    </section>
</main>
<?php require('../componentes/footer.php');?>
</body>
</html>