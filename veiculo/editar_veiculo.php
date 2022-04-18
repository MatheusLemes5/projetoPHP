    <title>Editar Veiculo</title>
</head>
<body>
<?php require('../componentes/header.php') ?>
<main>
    <section>
    <form action="logica_veiculos.php" method="post">
    <p><label for="ano">Ano: <input type="text" name="ano" id="ano" value="<?php echo $veiculo['ano']; ?>">
      <p><label for="marca">Marca: </label><input type="text" name="marca" id="marca" value="<?php echo $veiculo['marca']; ?>"></p>
      <p><label for="modelo">Modelo: </label><input type="text" name="modelo" id="modelo" value="<?php echo $veiculo['modelo']; ?>"></p>
      <p><label for="quilometragem">Quilometragem: <input type="text" name="quilometragem" id="quilometragem" value="<?php echo $veiculo['quilometragem']; ?>">
      <p><label for="adicionais">Adicionais: <input type="text" name="adicionais" id="adicionais" value="<?php echo $veiculo['adicionais']; ?>">
      <p><label for="valor">Valor: <input type="text" name="valor" id="valor" value="<?php echo $veiculo['valor']; ?>">
      <p><label for="contato">Contato: <input type="text" name="contato" id="contato" value="<?php echo $veiculo['contato']; ?>">
      <input type="hidden" id='codveiculo' name='codveiculo' value="<?php echo $veiculo['codveiculo']; ?>">
      <p><button type="submit" id='alterar' name='alterar' value="Alterar"> Alterar </button>  </p>      
    </form>
    </section>
</main>
<?php require('../componentes/footer.php');?>
</body>
</html>