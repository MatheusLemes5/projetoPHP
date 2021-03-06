<!DOCTYPE html>
<html>

<?php
include_once('componentes/cabecalho.php');
include_once('componentes/header.php');
include_once('usuario/funcoes_usuario.php');
include_once('veiculo/funcoes_veiculos.php');
include_once('conecta.php');
?>
   <title>Listar Usuário</title>
</head>
<body>  
<main>
         <h2> Usuário Logado:  <?php echo $_SESSION['nome']; ?>  </h2>
         <h3> Listagem de Veiculos </h3>
    <?php
        $veiculos = listarVeiculo($conexao);
        if(empty($veiculos)){
            ?>
                <section>
                    <p>Não há veiculos cadastrados.</p>
                </section>
            <?php
        }
        foreach($veiculos as $veiculo){
                 
            ?>
                <section>
                    <p>Modelo: <?php echo $veiculo['modelo']; ?></p>
                    <p>Ano: <?php echo $veiculo['ano']; ?></p>
                    <p>Marca: <?php echo $veiculo['marca']; ?></p>
                    <p>Quilometragem: <?php echo $veiculo['quilometragem']; ?></p> 
                    <p>Adicionais: <?php echo $veiculo['adicionais']; ?></p>    
                    <p>Valor: <?php echo $veiculo['valor']; ?></p>  
                    <p>Contato: <?php echo $veiculo['contato']; ?></p>                                         
                    <br><br>                                                          
                </section>
            <?php
        }
    ?>
</main>
<a href="/projeto_final/veiculo/pesquisa_veiculo.php"><button>Pesquisa por veiculos</button></a></li><br><br>
<a href="/projeto_final/veiculo/adicionar_veiculo.php"><button>Adicionar veiculo</button></a></li><br><br>
<a href="/projeto_final/usuario/editar_usuario.php"><button>Editar Perfil</button></a></li>
<?php require('componentes/footer.php');?>
</body>
<script type="text/javascript">
    function confirma_excluir()
    {
        resp=confirm("Confirma Exclusão?")

        if (resp==true)
        {

            return true;
        }
        else
        {
            return false;

        }

    }

</script>
</html>