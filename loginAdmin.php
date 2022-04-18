<title>Login</title>
</head>
<body>
<?php require('componentes/header.php') ?>
<main>
<h1> Login do Administrator</h1>
    <section>
    <form action="admin/logica_admin.php" method="post">
      <p><label for="email">Crendencial: </label><input type="text" name="email" id="email"></p>
      <p><label for="password">Senha: </label><input type="password" name="password" id="password"></p>
      <p><button type="submit" id='entrar' name='entrar' value="Entrar"> Entrar </button>  </p>  
    </form>
    </section>
</main>
</body>
</html>