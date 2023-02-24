<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>O Jogo</title>

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

			button{
				height: 30px;
  				width: 100px;
			}

			img{
				width: 500px;
				height: 300px;
			}

			@font-face {
   				font-family: MyFont;
   				src: url(font&img/BreatheFire.otf);
			}

			*{
   				font-family: MyFont;
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
				font-style: italic;
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

			.form{
				position: fixed;
   				top: 30%;
   				right: 36%;
			}

			.fieldset{
			align-items: center;
			background-image: linear-gradient(#c6c49e, #a29d43);			
			border-color: black; 
			color: black;
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
			<li class="bordershadow" style="float: right;"><a style="background-color: 	#458DD0;" href="sobrenos.php">Sobre Nós</a></li>
			<li class="bordershadow" style="float: right;"><a href="adm.php">ADM</a></li>
		</ul>
			<h1 class="h1">O Jogo</h1>
			<h2 class="h1">Prepare-se</h2>
			<h2 class="h1">Hidrate-se</h2>
			<h2 class="h1">E Divirta-se</h2>
	</form>

	<center>
		<form class="form" action="#" method="POST">
			<fieldset class="fieldset" style="width: 300px; height: 400px;">
				<img src="font&img/EarthMaze.png" style="bottom: 100px;">
				<button class="bordershadow" name="jogar" >Jogar</button>
			</fieldset>
		</form>
	</center>


</body>
</html>

<?php 
	if(isset($_POST['jogar'])){
		header('Location: jogocat.php');
	}
 ?>