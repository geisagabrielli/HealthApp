<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Procedimentos e Exames</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--adaptaçao para o mobile-->
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
		<div class="home-box">
       <div class="nav-container">
              <a href="index.html">
                  <img id="logo" src="img/logo.jpg" alt="Home">
              </a>
<div id="main-container">
    <h1>Cadastro de Procedimentos e Exames</h1>
    <form id="register-form" action="">
      <div class="full-box">
        <label for="typeproc">Tipo</label>
        <select name="typeproc">
					<option value="">Escolha uma opção</option>
					<option value="Proc">Procedimento</option>
					<option value="EXA">Exame</option>
		</select>
     <input type="typeproc" name="typeproc" id="typeproc" placeholder="Observação" data-required data-min-length="3" data-max-length="20">
      </div>
      <div class="full-box">
        <label for="nameproc">Nome do Procedimento/Exame</label>
        <input type="nameproc" name="nameproc" id="nameproc" placeholder="Digite aqui" data-required data-min-length="3" data-max-length="20">
      </div>
      <div class="full-box">
        <label for="typeproc1">Tipo Procedimental</label>
        <select name="typeproc1">
					<option value="">Escolha uma opção</option>
					<option value="Lab">Laboratorial</option>
					<option value="IMG">Imagem</option>
					</select>
     <input type="typeproc" name="typeproc" id="typeproc" placeholder="Observação" data-required data-min-length="3" data-max-length="20">
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Cadastrar Procedimento">
      </div>
      </div>
      </main>
    <footer>
      <div class="wrapper">
        <div class="footer-box">
          <div class="company-footer">
                      <h3>HealthApp</h3>
            <p>A maneira inteligente de gerenciar a saúde pública</p>
          </div>
        </div>
      <div class="footer-bottom">
        <div class="wrapper">
          <p>Geisa Gabrielli - 2021</p>
        </div>
      </div>
    </footer>
  </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>
    </form>
  </div>
  <p class="error-validation template"></p>
  <script src="js/scripts.js"></script>
</body>
</html>