<?php
    require_once('../conecta.php');
    require_once('funcoes_admin.php');
#CADASTRO PESSOA
    if(isset($_POST['cadastrar'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nome = $_POST['nome'];
        $array = array($email, $password, $nome);
        inserirAdmin($conexao, $array);
        header('location:../../index.php');
    }
#ENTRAR
    if(isset($_POST['entrar'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $array = array($email, $password);
        $admin = acessarAdmin($conexao,$array);
        if($admin){
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['codadmin'] = $admin['codadmin'];
            $_SESSION['nome'] = $admin['nome'];
            header('location:../indexAdmin.php');
        }
        else{
            header('location:login.php');
        }
    }

#SAIR
    if(isset($_POST['sair'])){
            session_start();
            session_destroy();
            header('location:../../login.php');
    }

#EDITAR PESSOA
    if(isset($_POST['editar'])){
    
            $codusuario = $_POST['editar'];
            $array = array($codusuario);
            $admin=buscarAdmin($conexao, $array);
            require_once('../../alterarAdmin.php');
    }    
#ALTERAR PESSOA
    if(isset($_POST['alterar'])){
    
            $codadmin = $_POST['codadmin'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nome = $_POST['nome']; 
            $array = array($email, $password, $nome, $codpessoa);
            alterarAdmin($conexao, $array);
    
            header('location:../../index.php');
    }
#DELETAR VEICULOS
if(isset($_POST['deletar'])){
    $codveiculo = $_POST['deletar'];
    $array=array($codveiculo);
    deletarVeiculo($conexao, $array);

    header('Location:../index.php');
}

#PESQUISAR PESSOA
    if(isset($_POST['pesquisar'])){
        $nome = $_POST['nome'];
        $array=array("%".$nome."%");
        $admin=pesquisarAdmin($conexao, $array);
        require_once('../../mostarAdmin.php');
    }
#ALTERAR PERFIL
    if(isset($_POST['alterarPerfilAdmin'])){
    
            $codadmin = $_POST['codadmin'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nome = $_POST['nome'];  
            $array = array($email, $password, $nome, $codadmin);
            alterarPerfilAdmin($conexao, $array);

            header('location:../../alterarPerfilAdmin.php');
    }
?>