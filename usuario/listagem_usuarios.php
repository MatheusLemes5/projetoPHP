<!DOCTYPE html>
<html>

<?php
include_once('../componentes/cabecalho.php');
include_once('../componentes/header.php');
include_once('funcoes_usuario.php');
include_once('../conecta.php');
?>
   <title>Listagem de usuários</title>
</head>
<body>  
<main>
         <h2> Administrador Logado:  <?php echo $_SESSION['nome']; ?>  </h2>
         <h3> Listagem de Veiculos </h3>
         <a href="/projeto_final/indexAdmin.php"><button>Listagem de veiculos</button></a></li><br><br>

    <?php
        $usuarios = listarUsuario($conexao);
        if(empty($usuarios)){
            ?>
                <section>
                    <p>Não há usuários cadastrados.</p>
                </section>
            <?php
        }
        foreach($usuarios as $usuario){
                 
            ?>
                <section>
                    <p>Nome: <?php echo $usuario['nome']; ?></p>
                    <p>Email: <?php echo $usuario['email']; ?></p>
                    <p>Senha: <?php echo $usuario['password']; ?></p>   
                    <form action="logica_usuario.php" method="post">
                        <button type="submit" id="editar" name="editar" value="<?php echo $usuario['codusuario']; ?>"> Editar </button>
                        <button type="submit" name="deletar" value="<?php echo $usuario['codusuario']; ?>" onclick = "return confirma_excluir()"> Deletar </button> 
                    </form>                              
                    <br><br>                                                          
                </section>
            <?php
        }
    ?>
</main>
<a href="/projeto_final/veiculo/adicionar_veiculo.php"><button>Adicionar veiculo</button></a></li><br><br>
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