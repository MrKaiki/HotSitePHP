
<!DOCTYPE html>
<html lang="pt-br" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">
	<title>MrKaiki Scirpting - MTA</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico">		
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<style>
		.bd-placeholder-img {
		  font-size: 1.125rem;
		  text-anchor: middle;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  user-select: none;
		}
  
		@media (min-width: 768px) {
		  .bd-placeholder-img-lg {
			font-size: 3.5rem;
		  }
		}
  
		.b-example-divider {
		  height: 3rem;
		  background-color: rgba(0, 0, 0, .1);
		  border: solid rgba(0, 0, 0, .15);
		  border-width: 1px 0;
		  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
		}
  
		.b-example-vr {
		  flex-shrink: 0;
		  width: 1.5rem;
		  height: 100vh;
		}
  
		.bi {
		  vertical-align: -.125em;
		  fill: currentColor;
		}
  
		.nav-scroller {
		  position: relative;
		  z-index: 2;
		  height: 2.75rem;
		  overflow-y: hidden;
		}
  
		.nav-scroller .nav {
		  display: flex;
		  flex-wrap: nowrap;
		  padding-bottom: 1rem;
		  margin-top: -1px;
		  overflow-x: auto;
		  text-align: center;
		  white-space: nowrap;
		  -webkit-overflow-scrolling: touch;
		}
	  </style>
</head>
	<body>
		<section class="banner-area" id="home">	
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">																		
					<div class="banner-content col-lg-10"  style="margin-bottom: -25%;">
						<h2 class="text-white text-uppercase">Seja Bem Vindo</h2>							
						<h2 class="text-white text-uppercase">A Nossa plataforma!</h2>
					</div>	
					<br>
					<div class="banner-content col-lg-3">			
					</div>																
				</div>
			</div>
		</section>

		<section class="service-area section-gap" id="vantagens">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-40 header-text">
						<h1>O que nossa plataforma faz?</h1>
						<p>
							Somos uma loja em investimentos na bolsa de valores
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<h4><span class="lnr lnr-cog"></span>Como Receber? </h4>
							<br>
							<p>
							Para receber nossa planilha de Invenstimentos da XP, basta completar as informações abaixo<br>
							para que possamos lhe enviar ela por e-email!
							</p>							
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<h4><span class="lnr lnr-pencil"></span>Quem somos?</h4>
							<br>
							<p>
							Somos uma empresa focada em invenstimentos!<br>
						Temos parceria com uma das maiores empresas de invenstimentos do <b>BRASIL</b> a XP invenstimentos <br>
						    e hoje vamos estar desponibilizando nossa planilha de Invenstimentos <br>
							para que você possa atingir seu primeiro Milhão
							</p>								
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<h4><span class="lnr lnr-phone"></span>O que vai lhe ajudar?</h4>
							<br>
							<p>
							Nossa planilha vai auxiliar você em seus Invenstimentos e despesas
							</p>								
						</div>
					</div>					
				</div>
			</div>	
		</section>
			
		<section class="service-area section-gap" id="vantagens">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-40 header-text">
						
						<div class="nav justify-content-center border-bottom pb-3 mb-3">

						</div>
					</div>
					<div class="col-md-7 col-lg-8">
						<h4 class="mb-3">Prencha formulario</h4>
					<form action="cadastrado.php" method="post">
						<div class="row g-3">
							<div class="col-sm-6">
								<label for="firstName" class="form-label">Nome</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" required name="nome">
							</div>
				
							<div class="col-sm-6">
								<label for="lastName" class="form-label">Sobrenome</label>
								<input type="text" class="form-control" id="lastName" placeholder="" value="" required name="sobrenome">
							</div>
				
							<div class="col-12">
								<label for="email" class="form-label">Email <span class="text-muted"></span></label>
								<input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
							</div>
						</div>
						<hr class="my-4">
							<button class="w-100 btn btn-primary btn-lg" type="submit" href="#">Enviar Formulario</button>
						</form>
					</div>
				</div>
		</section>

		


		<div class="container">
			<footer class="py-3 my-4">
				<ul class="nav justify-content-center border-bottom pb-3 mb-3">
				</ul>
				<p class="text-center text-muted">&copy; 2022 XP invenstimentos</p>
			</footer>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="assets/js/vendor/bootstrap.min.js"></script>			
		<script src="assets/js/main.js"></script>			
	</body>
</html>