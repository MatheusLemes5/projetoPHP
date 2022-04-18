<!DOCTYPE html>
<html>

<?php
include_once('../componentes/cabecalho.php');
include_once('../componentes/header.php');
include_once('../logica/funcoes_veiculos.php');
include_once('../conecta.php');
?>
   <title>Listar Veiculos</title>
</head>
<body>  
<body>

<main>
         <h3> Pesquisa de Veiculos </h3>
    <?php

        if(empty($veiculos)){
            ?>
                <section>
                    <p>Não há produtos cadastrados.</p>
                </section>
            <?php
        }
        else
        {
        foreach($veiculos as $veiculo){
                 
            ?>
                <section>
                    <p>Ano: <?php echo $veiculo['ano']; ?></p>
                    <p>Marca: <?php echo $veiculo['marca']; ?></p>
                    <p>Modelo: <?php echo $veiculo['modelo']; ?></p>
                    <p>Quilometragem: <?php echo $veiculo['quilometragem']; ?></p>
                    <p>Adicionais: <?php echo $veiculo['adicionais']; ?></p>

                    
                    <form action="logica_veiculos.php" method="post">
                        <button type="submit" name="editar" value="<?php echo $veiculo['codveiculo']; ?>"> Editar </button>
                        <button type="submit" name="deletar" value="<?php echo $veiculo['codveiculo']; ?>" onclick = "return confirma_excluir()"> Deletar </button> 
                    </form>
                    <br><br>                                                          
                </section>
            <?php
        }
    }
    ?>
</main>
<?php require('../componentes/footer.php');?>
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