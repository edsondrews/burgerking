<!DOCTYPE html>
<html>
<head>
	<title>King Burger</title>
	<meta charset="utf-8">
	<meta name="description" content="O mais Maraviwonderful Hamburger de Iraceminha de Bacon">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<link rel="shortcut icon" href="images/logo.png">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<header>
		<nav>
			<a href="index.php" title="Home" class="logo">
				<img src="images/kingburger.png"
				alt="King Burger" title="King Burger">
			</a>

			<a href="#" id="menu">
				<i class="fas fa-bars"></i>
			</a>

			<ul>
				<li>
					<a href="home" title="Home">Home</a>
				</li>
				<li>
					<a href="sobre" title="Sobre">Sobre</a>
				</li>
				<li>
					<a href="cardapio" title="Cardápio">Cardápio</a>
				</li>
				<li>
					<a href="contato" title="Contato">Contato</a>
				</li>
			</ul>
		</nav>

		<div class="clear"></div>

		<div class="msg">
			
			<h1>Mega Max Burger</h1>
			<p>4 Hamurgueres de Carne de Boi, mais 500 gramas de bacon</p>
			<p>
		     <a href="cardapio" title="Cardápio" class="btn">Ver Cardápio</a>
		 </p>
		</div>

		<img src="images/6.png" alt="Mega Max Burguer" title="Mega Max Burger" class="max">

	</header>

	<main>
		<?php
			//recuperar o parametro
			if ( isset ( $_GET["param"] ) ) {
				$pagina = $_GET["param"];
			} else {
				$pagina = "home";
			}

			//echo $pagina;
			$pagina = "paginas/".$pagina.".php";
			//verificar se o arquivo
			if ( file_exists($pagina) )
				include $pagina;
			else
				include "paginas/erro.php";  
		?>
	</main>

	<footer>
		
	</footer>

	<script type="text/javascript">
		$("#menu").click( function(){
			$("nav ul").toggle();
		})
	</script>
</body>
</html>