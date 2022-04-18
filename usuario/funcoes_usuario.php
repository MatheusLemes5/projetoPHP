<?php
 
    function inserirUsuario($conexao,$array){
       try {
            $query = $conexao->prepare("insert into usuario (email, password, nome) values (?, ?, ?)");

            $resultado = $query->execute($array);
            
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }


    function alterarUsuario($conexao, $array){
        try {
            $query = $conexao->prepare("update usuario set email = ?, password = ?, nome= ? where codusuario = ?");
            $resultado = $query->execute($array);             
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function alterarUsuarioPerfil($conexao, $array){
        try {
            session_start();
            $query = $conexao->prepare("update usuario set email = ?, password = ?, nome= ? where codusuario = ?");
            $resultado = $query->execute($array);   
            $_SESSION['nome']=$array[2];         
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }



    function deletarUsuario($conexao, $array){
        try {
            $query = $conexao->prepare("delete from usuario where codusuario = ?");
            $resultado = $query->execute($array);   
             return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
 
    function listarUsuario($conexao){
      try {
        $query = $conexao->prepare("SELECT * FROM usuario");      
        $query->execute();
        $usuarios = $query->fetchAll();
        return $usuarios;
      }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  

    }

     function buscarUsuario($conexao,$array){
        try {
        $query = $conexao->prepare("select * from usuario where codusuario=?");
        if($query->execute($array)){
            $usuario = $query->fetch(); //coloca os dados num array $usuario
            return $usuario;
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }

    function acessarUsuario($conexao,$array){
        try {
        $query = $conexao->prepare("select * from usuario where email=? and password=?");
        if($query->execute($array)){
            $usuario = $query->fetch(); //coloca os dados num array $pessoa
          if ($usuario)
            {  
                return $usuario;
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

 function pesquisarUsuario($conexao,$array){
        try {
        $query = $conexao->prepare("select * from usuario where nome like ?");
        if($query->execute($array)){
            $pessoas = $query->fetchAll(); //coloca os dados num array $pessoa
          if ($pessoas)
            {  
                return $pessoas;
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