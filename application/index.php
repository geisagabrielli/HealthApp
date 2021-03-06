<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--adaptaçao para o mobile-->
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	
	    <div class="container"> <!--largura maxima-->
		<header>
			<nav> <!--barra de navegação-->
				<div class="nav-container">
					<a href="index.html">
						<img id="logo" src="img/logo.jpg" alt="Home">
					</a>
					<i class="fas fa-bars btn-menumobile"></i>
					<ul>
						<li><a href="https://icd.who.int/en">Código Internacional de Doenças</</a></li> <!--direciona para a página da OMS com o CO11, última versão do código internacional-->
						<li><a href="generalregister.html">Novos Cadastros</a></li> <!--direciona para a página com todos os links de cadastros-->
						<li><a href="help.html">Ajuda</a></li> <!--Manual de navegação do site-->
					</ul>
				</div>
			</nav>
			<div id="main-banner">
				<div id="search-form">
					<h1>A maneira inteligente de gerenciar a saúde pública</h1>

					<section id="blog-container" class="wrapper">
			<h2 class="title-center">Consultas Rápidas</h2> <!--Links rápidos de consulta-->
			<div class="article-box">
				<img src="img/prontuario.jpeg">
				<h4><a href="#">Prontuário</a></h4>
				</div>
			<div class="article-box">
				<img src="img/leitos.jpg">
				<h4><a href="#">Leitos Disponíveis</a></h4>
				</div>
				<div class="article-box">
				<img src="img/medicamentos.jpg">
				<h4><a href="#">Estoque de Medicamentos</a></h4>
				</div>
           		 <div class="article-box">
				<img src="img/relatorio.jpg">
				<h4><a href="#">Relatórios</a></h4>
				</div>
				 <div class="article-box">
				<img src="img/agendamento.jpg">
				<h4><a href="#">Agenda de Consultas e Exames</a></h4>
				</div>
				 <div class="article-box">
				<img src="img/recomendation.png">
				<h4><a href="#">Recomendações</a></h4>
				</div>

					<section id="status-container" class="wrapper">
			<h2 class="title-center">Estatísticas Sistema de Saúde 2021</h2> <!-- Valores ilustrativos -->
						<div>
				<div class="status-box">
					<span class="status-qtd">6.895</span>
					<p class="status-text">Marcações Online </p>
				</div>
				<div class="status-box">
					<span class="status-qtd">15.0628</span>
					<p class="status-text">Prontuários Digitais</p>
				</div>
				<div class="status-box">
					<span class="status-qtd">3.243</span>
					<p class="status-text">Postos, Clínicas, Hospitais e Laboratórios Cadastrados</p>
				</div>
				<div class="status-box">
					<span class="status-qtd">615.287</span>
					<p class="status-text">Pacientes Atendidos</p>
				</div>
			</div>
			</section>
		<section id="blog-container" class="wrapper">
			<h2 class="title-center">Últimas notícias</h2> <!--Matérias e campanhas de saúde-->
						<div class="article-box">
				<img src="img/vacina.jpeg">
				<h4><a href="#">Campanha de Vacinaçao Contra COVID-19</a></h4>
				<p class="article-resume">A primeira etapa de vacinação teve início em alguns estados do país. Confira!</p>
				
				<a href="#" class="article-btn light-btn">Ler post</a>
			</div>
			<div class="article-box">
				<img src="img/maternar.jpg">
				<h4><a href="#">Ação Maternar</a></h4>
				
				<p class="article-resume">Como tornar a maternidade mais doce</p>
				<a href="#" class="article-btn light-btn">Ler post</a>
			</div>
			<div class="article-box">
				<img src="img/adolescente.png">
				<h4><a href="#">Psicologia na Adolescência</a></h4>
				
				<p class="article-resume">Lidar com a fase de transição mais brusca do ser humano não é fácil para quem vive e quem convive</p>
				<a href="#" class="article-btn light-btn">Ler post</a>
			</div>
         </section>
		<footer>
			<div class="wrapper">
				<div class="footer-box">
					<div class="company-footer">
						
						<h2>HealthTech</h2>
						<p>A maneira inteligente de gerenciar a saúde pública.</p>
					</div>
				</div>
				<div class="footer-box">
					<div class="articles-footer">
						<h2>Artigos recentes</h2>
						<ul class="footer-list footer-article-list">
							<li>
								<a href="#">Campanha de Vacinaçao Contra COVID-19</a>
								<span class="article-date">05 de março de 2021</span>
							</li>
							<li>
								<a href="#">Como tornar a maternidade mais doce</a>
								<span class="article-date">02 de abril 2021</span>
							</li>
							<li>
								<a href="#">Lidar com a fase de transição mais brusca do ser humano não é fácil para quem vive e quem convive</a>
								<span class="article-date">30 de março de 2021</span>
							</li>
						</ul>
					</div>
				</div>
				
			<div class="footer-bottom">
				<div class="wrapper">
					<p>Geisa Gabrielli Silva - 2021</p>
				</div>
			</div>
		</footer>
	</div>
	?>
</body>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>
