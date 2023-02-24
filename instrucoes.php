<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Instrucoes</title>
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

			p{
				text-align: left;
			}

			p.medium {
  				line-height: 1.0;
			}


			a:link{
				text-decoration: none;
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

			.form{
				position: relative;
   				top: 60%;
   				right: 36%;
   				width: 400px;
			}

			.fieldset{
				align-items: center;
				background-image: linear-gradient(#c6c49e, #a29d43);
				border-color: black;
				width: 400px; 
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
			<h1 class="h1">Instruções e Informações</h1>

			<center>
				<form class="form">
					<fieldset class="fieldset">
						<ol>
  							<p class="medium">-> Realize, primeiramente, o <a href="cadastro.php" style="color: white">cadastro;</a></p>
  							<p class="medium">-> Em seguida basta começar o <a href="download.php" style="color: white">jogo</a> :)</p>
  							<p>-------------------------======-------------------------</p>
						</ol>

						<ol>
							<p class="medium">-> São 5(cinco) categorias de jogo: "Continentes", "Países, Linguas e Moedas", "Países e Capitais", "Estados e Capitais do Brasil", "Oceanos, Mares e Lagos";</p>
							<p class="medium">-> Escolha entre elas e começe a jogar;</p>
  							<p class="medium">-> O jogo é simples, basta clicar com seu mouse ou touchpad em cima da alternativa que você julga ser correta;</p>
  							<p class="medium">-> Quando acertar uma questão você avança para a próxima pergunta;</p>
  							<p class="medium">-> Quando acabar o tempo irá voltar para a tela de preparação do jogo;</p>
  							<p class="medium">-> Ao final de tudo serão somados os valores das categorias e os pontos vão para o nosso <a href="ranking.php" style="color: white">ranking</a>;</p>
  							<p class="medium">-> Importante lembrar que o seu resultado no ranking será o valor da ultima vez que você jogou.</p>
						</ol>
					</fieldset>
				</form>
			</center>
	</form>
</body>
</html>

