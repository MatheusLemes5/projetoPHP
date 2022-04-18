
    <title>Criar Usuário</title>
</head>
<body>
<?php require('../componentes/header.php') ?>
<main>
    <section>
    <form action="logica_usuario.php" method="post">
      <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome"></p>
      <p><label for="email">email: </label><input type="text" name="email" id="email"></p>
      <p><label for="password">Senha: </label> <input type="password" name="password" id="password"></p>
      <p><button type="submit" id='cadastrar' name='cadastrar' value="Cadastrar"> Cadastrar </button>  </p>      
    </form>
    </section>
</main>
</body>
</html>