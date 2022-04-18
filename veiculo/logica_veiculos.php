<?php
    require_once('../conecta.php');
    require_once('funcoes_veiculos.php');
#CADASTRO VEICULO
    if(isset($_POST['cadastrar'])){
        #$imagem = $_POST['imagem'];
        $ano = $_POST['ano'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $quilometragem = $_POST['quilometragem'];
        $adicionais = $_POST['adicionais'];
        $valor = $_POST['valor'];
        $contato = $_POST['contato'];
        $array = array($ano, $marca, $modelo, $quilometragem, $adicionais, $valor, $contato);
        inserirVeiculos($conexao, $array);
        header('location:../index.php');
    }

#EDITAR VEICULO
    if(isset($_POST['editar'])){
    
            $codveiculo = $_POST['editar'];
            $array = array($codveiculo);
            $usuario=buscarVeiculo($conexao, $array);
            require_once('../alterarveiculo.php');
    }    
#ALTERAR PESSOA
    if(isset($_POST['alterar'])){
    
            $codveiculo = $_POST['codveiculo'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nome = $_POST['nome']; 
            $array = array($email, $password, $nome, $codpessoa);
            alterarUsuario($conexao, $array);
    
            header('location:../../index.php');
    }
#DELETAR PESSOA
    if(isset($_POST['deletar'])){
        $codveiculo = $_POST['deletar'];
        $array=array($codveiculo);
        deletarVeiculo($conexao, $array);

        header('Location:../index.php');
    }

#PESQUISAR POR MODELO
    if(isset($_POST['pesquisarModelo'])){
        $modelo = $_POST['modelo'];
        $array=array("%".$modelo."%");
        $veiculos=pesquisarVeiculoPorModelo($conexao, $array);
        require_once('mostrar_veiculo.php');
        
    }

#PESQUISAR VEICULO POR MARCA
if(isset($_POST['pesquisarMarca'])){
    $marca = $_POST['marca'];
    $array=array("%".$marca."%");
    $veiculos=pesquisarVeiculoPorMarca($conexao, $array);
    require_once('mostrar_veiculo.php');
    
}

#PESQUISAR VEICULO POR ANO
if(isset($_POST['pesquisarMaiorAno'])){
    $ano = $_POST['ano'];
    $array=array($ano);
    $veiculos=pesquisarVeiculoPorAnoMaior($conexao, $array);
    require_once('mostrar_veiculo.php');
    
}

#PESQUISAR VEICULO POR QUILOMETRAGEM
if(isset($_POST['pesquisaQuilometragem'])){
    $quilometragem = $_POST['quilometragem'];
    $array=array($quilometragem);
    $veiculos=pesquisarVeiculoMaiorQuilometragem($conexao, $array);
    require_once('mostrar_veiculo.php');
    
}

#PESQUISAR VEICULO POR VALOR
if(isset($_POST['pesquisaValor'])){
    $valor = $_POST['valor'];
    $array=array($valor);
    $veiculos=pesquisarVeiculoMenorValor($conexao, $array);
    require_once('mostrar_veiculo.php');
    
}

#ALTERAR PERFIL
    if(isset($_POST['alterarPerfil'])){
    
            $codusuario = $_POST['codusuario'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nome = $_POST['nome'];  
            $array = array($email, $password, $nome, $codpessoa);
            alterarUsuarioPerfil($conexao, $array);

            header('location:../../alterarPerfil.php');
    }
?>