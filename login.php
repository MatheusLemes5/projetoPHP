<title>Login</title>
</head>
<body>
<?php require('componentes/header.php') ?>
<main>
<h1> Login do Administrador</h1>
    <section>
    <form action="usuario/logica_usuario.php" method="post">
      <p><label for="email">Email: </label><input type="text" name="email" id="email"></p>
      <p><label for="password">Senha: </label><input type="password" name="password" id="password"></p>
      <p><button type="submit" id='entrar' name='entrar' value="Entrar"> Entrar </button>  </p>  
    </form>
    </section>
    <a href="/projeto_final/usuario/criar_usuario.php"><button>Cadastre-se</button></a></li>
    <a href="/projeto_final/loginAdmin.php">Você é um Administrador?</a></li>

</main>
</body>
</html>