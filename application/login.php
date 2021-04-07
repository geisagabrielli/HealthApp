<title> Login </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<div id="main-container">
		<h1> Entrar</h1>
	<form class = "form-signin" action ="logar.php" method="POST">
		<div id="login-container">
       <form action="">
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" placeholder="Digite seu e-email" autocomplete="off" required>
      <label for="password">Senha</label>
      <input type="password" name="password" id="password" placeholder="Digite sua senha" required>
      <a href="#" id="forgot-pass">Esqueceu a senha?</a>
      <input type="submit" value="Login">
    </form>
	
	</div>
	</body>
	</html>	