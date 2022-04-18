<?php
    require_once('../conecta.php');
    require_once('funcoes_usuario.php');
#CADASTRO PESSOA
    if(isset($_POST['cadastrar'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nome = $_POST['nome'];
        $array = array($email, $password, $nome);
        inserirUsuario($conexao, $array);
        header('location:../login.php');
    }
#ENTRAR
    if(isset($_POST['entrar'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $array = array($email, $password);
        $usuario = acessarUsuario($conexao,$array);
        if($usuario){
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['codusuario'] = $usuario['codusuario'];
            $_SESSION['nome'] = $usuario['nome'];
            header('location:../index.php');
        }
        else{
            header('location:../login.php');
        }
    }

#SAIR
    if(isset($_POST['sair'])){
            session_start();
            session_destroy();
            header('location:../login.php');
    }

#EDITAR PESSOA
    if(isset($_POST['editar'])){
    
            $codusuario = $_POST['editar'];
            $array = array($codusuario);
            $usuario=buscarUsuario($conexao, $array);
            require_once('editar_usuario.php');
    }   
#ALTERAR PESSOA
    if(isset($_POST['alterar'])){
    
            $codusuario = $_POST['codusuario'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nome = $_POST['nome']; 
            $array = array($email, $password, $nome, $codusuario);
            alterarUsuario($conexao, $array);
            header('location:listagem_usuarios.php');
    }
#DELETAR PESSOA
    if(isset($_POST['deletar'])){
        $codusuario = $_POST['deletar'];
        $array=array($codusuario);
        deletarUsuario($conexao, $array);

        header('Location:../index.php');
    }

#PESQUISAR PESSOA
    if(isset($_POST['pesquisar'])){
        $nome = $_POST['nome'];
        $array=array("%".$nome."%");
        $usuarios=pesquisarUsuario($conexao, $array);
        require_once('../mostarUsuario.php');
    }
#ALTERAR PERFIL
    if(isset($_POST['alterarUsuarioPerfil'])){
    
            $codusuario = $_POST['codusuario'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nome = $_POST['nome'];  
            $array = array($email, $password, $nome, $codusuario);
            alterarUsuarioPerfil($conexao, $array);

            header('location:../index.php');
    }
?>