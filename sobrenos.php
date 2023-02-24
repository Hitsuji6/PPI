<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sobre Nós</title>
		<style>
			html {
  				scroll-behavior: smooth;
			}

			ul{
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #C6C49E;
			}

			li{
				float: left;
			}

			li a{
				display: block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}

			li a:hover{
				background-color: #DED5A6;
			}

			@font-face {
   				font-family: MyFont;
   				src: url(font&img/BreatheFire.otf);
			}

			*{
   				font-family: MyFont;
			}

			div.polaroid {
  				width: 70%;
 				background-color: white;
  				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  				margin-bottom: 25px;
			}

			div.container {
  				text-align: center;
  				padding: 10px 20px;
			}

			td{
				padding: 10px 20px;
			}

		</style>

		<style>
			.body{
				background-image: url(font&img/wallpaper.jpg);
				background-size: cover;
				margin: 0;
			}

			.h1{
				color: white;
				text-align: center;
				font-family: MyFont;
			}

			.bordershadow {
				text-align:center;
				border:2px solid #dd;
				border-radius: 3px;
				box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
				transition: all 200ms ease-out;
			}

			.bordershadow:hover {
				box-shadow: 0 0 6px black;
			}

		</style>
</head>
<body class="body">
	<form>
		<ul>
			<li class="bordershadow"><a href="index.php">Inicio</a></li>
			<li class="bordershadow"><a href="cadastro.php">Cadastro</a></li>
			<li class="bordershadow"><a href="login.php">Jogar</a></li>
			<li class="bordershadow"><a href="instrucoes.php">Instrucoes</a></li>
			<li class="bordershadow"><a href="ranking.php">Ranking</a></li>
			<li class="bordershadow" style="float: right;"><a style="background-color: #458DD0;" href="sobrenos.php">Sobre Nós</a></li>
			<li class="bordershadow" style="float: right;"><a href="adm.php">ADM</a></li>
		</ul>
			<h1 class="h1">Sobre Nós</h1>
	</form>

	<table>
		<tr>
			<td>
				<div class="polaroid">
  					<img src="font&img/eduardo.jpg" alt="eduardo" style="width:100%">
 						<div class="container">
  							<h1>Eduardo Veiga</h1>
  						</div>
				</div>
			</td>

			<td>
				<div class="polaroid">
  					<img src="font&img/julia.jpg" alt="julia" style="width:100%">
 						<div class="container">
 							<h1>Julia Moreira</h1>
  						</div>
				</div>
			</td>

			<td>
				<div class="polaroid">
  					<img src="font&img/gabriel.jpg" alt="gabriel" style="width:100%">
 						<div class="container">
 							<h1>Gabriel Abreu</h1>
  						</div>
				</div>
			</td>

			<td>
				<div class="polaroid">
  					<img src="font&img/matheus.jpg" alt="matheus" style="width:100%">
 						<div class="container">
 							<h1>Matheus Rossato</h1>
  						</div>
				</div>
			</td>

		</tr>

		<tr>

			<td>
				<div class="polaroid">
  					<img src="font&img/lucio.jpg" alt="lucio" style="width:100%">
 						<div class="container">
 							<h1>Lúcio</h1>
  							<p>Irmão do Eduardo</p>
  						</div>
				</div>
			</td>

			<td>
				<div class="polaroid">
  					<img src="font&img/elisa.jpg" alt="elisa" style="width:100%">
 						<div class="container">
 							<h1>Elisa</h1>
  							<p>Irmã da Julia</p>
  						</div>
				</div>
	
			</td>

			<td>
				<div class="polaroid">
  					<img src="font&img/mia.jpg" alt="mia" style="width:100%">
 						<div class="container">
 							<h1>Chloe</h1>
  							<p>Pet do Gabriel</p>
  						</div>
				</div>
	
			</td>

			<td>
				<div class="polaroid">
  					<img src="font&img/wolly.jpg" alt="wolly" style="width:100%">
 						<div class="container">
 							<h1>Wolly</h1>
  							<p>Pet do Matheus</p>
  						</div>
				</div>
			</td>
		</tr>
	</table>
</body>
</html>