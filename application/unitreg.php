<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Unidade de Saúde</title>
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
    <h1>Cadastro de Unidade de Saúde</h1>
    <form id="register-form" action="">
      <div class="full-box">
        <label for="nameunit">Nome da Unidade de Saúde</label>
        <input type="nameunit" name="nameunit" id="nameunit" placeholder="Digite o nome da unidade de saúde" data-required data-min-length="3" data-max-length="20">
      </div>
      <div class="full-box">
          <label for="kindplace">Tipo de Estabelecimento</label>
              <select name="place">
					<option value="">Escolha uma opção</option>
					<option value="ps">Posto de Saúde</option>
					<option value="hp">Hospital Público</option>
					<option value="hpr">Hospital Privado</option>
					<option value="labp">Laboratório de Análises Clínicas - Público</option>
					<option value="labpr">Laboratório de Análises Clínicas - Privado</option>
					<option value="ambp">Ambulatório - Público</option>
					<option value="ambpr">Ambulatório - Privado</option>
				</select>
				       <input type="nameunit" name="nameunit" id="nameunit" placeholder="Observação" data-required data-min-length="3" data-max-length="20">
			</div>
      <div class="full-box">
          <label for="place">Localização</label>
          <select name="place">
					<option value="estado">Selecione o Estado</option> 
		<option value="ac">Acre</option> 
		<option value="al">Alagoas</option> 
		<option value="am">Amazonas</option> 
		<option value="ap">Amapá</option> 
		<option value="ba">Bahia</option> 
		<option value="ce">Ceará</option> 
		<option value="df">Distrito Federal</option> 
		<option value="es">Espírito Santo</option> 
		<option value="go">Goiás</option> 
		<option value="ma">Maranhão</option> 
		<option value="mt">Mato Grosso</option> 
		<option value="ms">Mato Grosso do Sul</option> 
		<option value="mg">Minas Gerais</option> 
		<option value="pa">Pará</option> 
		<option value="pb">Paraíba</option> 
		<option value="pr">Paraná</option> 
		<option value="pe">Pernambuco</option> 
		<option value="pi">Piauí</option> 
		<option value="rj">Rio de Janeiro</option> 
		<option value="rn">Rio Grande do Norte</option> 
		<option value="ro">Rondônia</option> 
		<option value="rs">Rio Grande do Sul</option> 
		<option value="rr">Roraima</option> 
		<option value="sc">Santa Catarina</option> 
		<option value="se">Sergipe</option> 
		<option value="sp">São Paulo</option> 
		<option value="to">Tocantins</option> 
	</select>
	<input type="nameunit" name="nameunit" id="nameunit" placeholder="Observação" data-required data-min-length="3" data-max-length="20">
      </div>
<div class="full-box">
          <label for="address">Endereço</label>
            <input type="address" name="address" id="address" placeholder="Digite o endereço da unidade" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="full-box">
          <label for="specialty">Especialidade</label>
            <select name="place">
					<option value="estado">Selecione a especialidade</option> 
          <option value="CMI">Clínica Médica I (Geral, Gineco, Cardio, Dermato, Otorrino, Endocrino) </option> 
		<option value="CMII">Clínica Médica II (Ginecologia, Urologista, Pediatria, Ortopedia, Oftalmo)</option> 
		<option value="CMIII">Clínica Médica III (Clínico Geral, Ginecologia, Urologista, Pediatria)</option> 
		<option value="CG">Clínico Geral</option> 
	    <option value="OF">Oftalmologia</option> 
		<option value="GN">Ginecologia</option> 
		<option value="PE">Pediatria</option> 
		<option value="ELEI">Exames Laboratoriais e Exames de Imagem (Completo) </option> 
		<option value="EL">Exames Laboratoriais (Hemograma Completo, Urocultura, Fezes)</option> 
		<option value="EI">Exames de Imagem (RaioX, Mamografia, Tomog. comp., Ultrass.) </option> 
			</select>
			<input type="nameunit" name="nameunit" id="nameunit" placeholder="Observação" data-required data-min-length="3" data-max-length="20">
			</div>
 <div class="full-box">
        <input id="btn-submit" type="submit" value="Cadastrar Unidade">
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