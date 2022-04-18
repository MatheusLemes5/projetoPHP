<?php
 
    function inserirAdmin($conexao,$array){
       try {
            $query = $conexao->prepare("insert into admin (email, password, nome) values (?, ?, ?)");

            $resultado = $query->execute($array);
            
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }


    function alterarAdmin($conexao, $array){
        try {
            $query = $conexao->prepare("update admin set email = ?, password = ?, nome= ? where codadmin = ?");
            $resultado = $query->execute($array);             
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function alterarPerfilAdmin($conexao, $array){
        try {
            session_start();
            $query = $conexao->prepare("update usuario set email = ?, password = ?, nome= ? where codadmin = ?");
            $resultado = $query->execute($array);   
            $_SESSION['nome']=$array[0];         
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }



    function deletarAdmin($conexao, $array){
        try {
            $query = $conexao->prepare("delete from admin where codadmin = ?");
            $resultado = $query->execute($array);   
             return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
 
    function listarAdmin($conexao){
      try {
        $query = $conexao->prepare("SELECT * FROM admin");      
        $query->execute();
        $admins = $query->fetchAll();
        return $admins;
      }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  

    }

     function buscarAdmin($conexao,$array){
        try {
        $query = $conexao->prepare("select * from admin where codadmin=?");
        if($query->execute($array)){
            $admin = $query->fetch(); //coloca os dados num array $admin
            return $admin;
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }

    function acessarAdmin($conexao,$array){
        try {
        $query = $conexao->prepare("select * from admin where email=? and password=?");
        if($query->execute($array)){
            $admin = $query->fetch(); //coloca os dados num array $admin
          if ($admin)
            {  
                return $admin;
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

 function pesquisarAdmin($conexao,$array){
        try {
        $query = $conexao->prepare("select * from admin where nome like ?");
        if($query->execute($array)){
            $admin = $query->fetchAll(); //coloca os dados num array $admin
          if ($admin)
            {  
                return $admin;
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