<?php
 
    function inserirVeiculos($conexao,$array){
       try {
            $query = $conexao->prepare("insert into veiculo (ano, marca, modelo, quilometragem, adicionais) values (?, ?, ?, ?, ?)");
            $resultado = $query->execute($array);
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }


    function alterarVeiculo($conexao, $array){
        try {
            $query = $conexao->prepare("update veiculo set imagem = ?, ano = ?, marca = ?, modelo = ?, quilomatragem = ?, adicionais = ? where codveiculo = ?");
            $resultado = $query->execute($array);             
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function alteraraçãoVeiculo($conexao, $array){
        try {
            session_start();
            $query = $conexao->prepare("update veiculo set imagem = ?, ano = ?, marca = ?, modelo = ?, quilomatragem = ?, adicionais = ? where codveiculo = ?");
            $resultado = $query->execute($array);   
            $_SESSION['nome']=$array[0];         
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }



    function deletarVeiculo($conexao, $array){
        try {
            $query = $conexao->prepare("delete from veiculo where codveiculo = ?");
            $resultado = $query->execute($array);   
             return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
 
    function listarVeiculo($conexao){
      try {
        $query = $conexao->prepare("SELECT * FROM veiculo");      
        $query->execute();
        $veiculos = $query->fetchAll();
        return $veiculos;
      }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  

    }

     function buscarVeiculo($conexao,$array){
        try {
        $query = $conexao->prepare("select * from veiculo where codveiculo=?");
        if($query->execute($array)){
            $veiculo = $query->fetch(); //coloca os dados num array $veiculos
            return $veiculo;
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }

 function pesquisarVeiculoPorMarca($conexao,$array){
        try {
        $query = $conexao->prepare("select * from veiculo where marca like ?");
        if($query->execute($array)){
            $veiculo = $query->fetchAll(); //coloca os dados num array $veiculos
          if ($veiculo)
            {  
                return $veiculo;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }

    function pesquisarVeiculoPorAnoMaior($conexao,$array){
        try {
        $query = $conexao->prepare("select * from veiculo where ano >= ?");
        if($query->execute($array)){
            $veiculo = $query->fetchAll(); //coloca os dados num array $veiculos
          if ($veiculo)
            {  
                return $veiculo;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }

    function pesquisarVeiculoPorModelo($conexao,$array){
        try {
        $query = $conexao->prepare("select * from veiculo where modelo like ?");
        if($query->execute($array)){
            $veiculo = $query->fetchAll(); //coloca os dados num array $veiculos
          if ($veiculo)
            {  
                return $veiculo;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }

    function pesquisarVeiculoMaiorQuilometragem($conexao,$array){
        try {
        $query = $conexao->prepare("select * from veiculo where quilometragem > ?");
        if($query->execute($array)){
            $veiculo = $query->fetchAll(); 
          if ($veiculo)
            {  
                return $veiculo;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }

    function pesquisarVeiculoMenorQuilometragem($conexao,$array){
        try {
        $query = $conexao->prepare("select * from veiculo where quilometragem < ?");
        if($query->execute($array)){
            $veiculo = $query->fetchAll(); 
          if ($veiculo)
            {  
                return $veiculo;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }
   ?>