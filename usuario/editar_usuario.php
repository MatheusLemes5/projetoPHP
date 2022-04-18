</head>
<body>
<title>Editar Usuário</title>
<main>
    <section>
    <form action="logica_usuario.php" method="post">
      <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome" value="<?php echo $usuario['nome']; ?>"></p>
      <p><label for="email">Email: </label><input type="text" name="email" id="email" value="<?php echo $usuario['email']; ?>"></p>
      <p><label for="password">Senha: </label><input type="password" name="password" id="password" value="<?php echo $usuario['password']; ?>"></p>
      <input type="hidden" id='codusuario' name='codusuario' value="<?php echo $usuario['codusuario']; ?>">
      <p> <input type="submit" id='alterar' name='alterar' value="Alterar">
      </p>        
        </form>
    </section>
</main>
<?php require('../componentes/footer.php');?>
</body>
</html>