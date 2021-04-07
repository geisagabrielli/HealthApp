<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>
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
    <h1>Cadastro de Usuário</h1>
    <form id="register-form" action="">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite o e-mail" data-min-length="2" data-email-validate required>
      </div>
      <div class="half-box spacing">
          <label for="name">Nome</label>
          <input type="text" name="name" id="name" placeholder="Digite o nome" data-required data-min-length="3" data-max-length="16" required>
      </div>
      <div class="half-box">
          <label for="lastname">Sobrenome</label>
          <input type="text" name="lastname" id="lastname" placeholder="Digite o sobrenome" data-required data-only-letters required>
      </div>
      <div class="half-box spacing">
        <label for="profession">Profissão</label>
        <input type="text" name="profession" id="profession" placeholder="Digite a profissão" data-required data-only-letters required>
      </div>
      <div class="half-box">
        <label for="profregister">Registro Profissional</label>
        <input type="text" name="profregister" id="profregister" placeholder="Digite o registro profissional, ex: CRM" data-required data-only-numbers required>
      </div>
      <div class="full-box">
          <label for="access">Tipo de Acesso</label>
            <select name="access">
          <option value="kindaccess">Selecione o acesso necessário</option> 
          <option value="ADMIN">Administrador </option> 
          <option value="Super">Super (Cadastra/Modifica) </option>
           <option value="user">Consulta (Edita prontuário)</option>
           </select>
      <input type="nameunit" name="nameunit" id="nameunit" placeholder="Observação" data-required data-min-length="3" data-max-length="20">
      </div>
      <div class="full-box">
        <label for="placeatend">Local de Atendimento</label>
        <input type="text" name="placeatend" id="placeatend" placeholder="Digite o local de atendimento" data-required data-only-letters required>
      </div>
     <div class="full-box">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" placeholder="Digite a senha" data-required data-only-letters required>
      </div>
      <div class="half-box">
        <label for="timeatend">Horário de Atendimento</label>
        <input type="text" name="timeatend" id="timeatend" placeholder="Digite dias e períodos de atendimento" data-required data-only-letters required>
      </div>
            <div class="full-box">
        <input id="btn-submit" type="submit" value="Cadastrar Usuário">
      </div>
    </div>
</main>
   <footer>
      <div class="wrapper">
        <div class="footer-box">
          <div class="company-footer">
            
            <h2>HealthTech</h2>
            <p>A maneira inteligente de gerenciar a saúde pública.</p>
          </div>
        </div>
        
        
      <div class="footer-bottom">
        <div class="wrapper">
          <p>Geisa Gabrielli Silva - 2021</p>
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