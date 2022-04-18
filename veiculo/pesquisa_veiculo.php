<?php
 include_once('../componentes/cabecalho.php');
?>
    <title>Pesquisar Veiculos</title>
</head>
<body>
<?php require('../componentes/header.php') ?>
<main>
    <section>
    <form action="logica_veiculos.php" method="post">
      <p><label for="modelo">Modelo: </label><input type="text" name="modelo" id="modelo"></p>
      <p><button type="submit" id='pesquisarModelo' name='pesquisarModelo' value="PesquisarModelo"> Pesquisar por modelo</button>  </p><br>

      <p><label for="marca">Marca: </label><input type="text" name="marca" id="marca"></p>
      <p><button type="submit" id='pesquisarMarca' name='pesquisarMarca' value="PesquisarMarca"> Pesquisar por marca</button>  </p><br>    
   
      <p><label for="ano">Ano: </label><input type="text" name="ano" id="ano"></p>
      <p><button type="submit" id='pesquisarMaiorAno' name='pesquisarMaiorAno' value="PesquisarMaiorAno"> Pesquisar veilculos acima do ano</button>  </p><br>  

      <p><label for="quilometragem">Quilometragem: </label><input type="text" name="quilometragem" id="quilometragem"></p>
      <p><button type="submit" id='pesquisaQuilometragem' name='pesquisaQuilometragem' value="PesquisaQuilometragem"> Pesquisar veilculos acima da quilometragem</button>  </p><br>
      
      <p><label for="valor">Valor: </label><input type="text" name="valor" id="valor"></p>
      <p><button type="submit" id='pesquisaValor' name='pesquisaValor' value="PesquisaValor"> Pesquisar veilculos abaixo do valor</button>  </p><br>  
    </form>
    </section>
</main>
<?php require('../componentes/footer.php');?>
</body>
</html>