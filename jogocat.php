<?php 
	session_start();
	include('conexao.php');

	$_SESSION['pontos'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Categorias</title>

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

			button{
				border-radius: 8px;
				color: black; 
  				border: 2px solid white;
  				font-size: 15px;
  				background-color: #C6C49E;
  				width: 300px;
  				height: 50px;
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
				position: fixed;
   				top: 30%;
   				right: 41%;
   				
			}

			.fieldset{
			background-image: linear-gradient(#c6c49e, #a29d43);
			border-color: black; 
			}

		</style>

		<style>
		#cantos {
  			border-radius: 15px;
  			background: white;
  			background-position: left top;
  			background-repeat: repeat; 
  			width: 150px; 
  			height: 20px; 
		}

		#cantos2 {
  			border-radius: 25px;
  			background: white;
  			background-position: left top;
  			background-repeat: repeat; 
  			width: 100px;  
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
			<h1 class="h1">Categorias</h1>
	</form>

	<center>
		<form class="form" action="#" method="POST">
			<fieldset class="fieldset" style="width: 300px; height: 320px;">
				<button name="cat1">Continentes</button><br>
					<p></p>
				<button name="cat2">Países, Linguas e Moedas</button><br>
					<p></p>
				<button name="cat3">Países e Capitais</button><br>
					<p></p>
				<button name="cat4">Estados e Capitais do Brasil</button><br>
					<p></p>
				<button name="cat5">Oceanos, Mares e Lagos</button><br>
					<p></p>
			</fieldset>
		</form>
	</center>
</body>
</html>
<?php

	if (isset($_POST['cat1'])) {

		$sql = "SELECT * FROM cat1 ORDER BY RAND() LIMIT 11";
		$rs = mysqli_query($link,$sql);
		$i = 1;
		while ($linha = mysqli_fetch_assoc($rs)) {
			$questoes[$i] = $linha['questao'];
			$respostaCorreta[$i] = $linha['respostaCorreta'];
			$resposta2[$i] = $linha['resposta2'];
			$resposta3[$i] = $linha['resposta3'];
			$i++;
		}

		$_SESSION['questoes'] = $questoes;
		$_SESSION['respostaCorreta'] = $respostaCorreta;
		$_SESSION['resposta2'] = $resposta2;
		$_SESSION['resposta3'] = $resposta3;
		$_SESSION['contagem'] = 1;

		echo "<script>window.location.href='jogocat1.php'</script>";
	}

	if (isset($_POST['cat2'])) {

		$sql = "SELECT * FROM cat2 ORDER BY RAND() LIMIT 11";
		$rs = mysqli_query($link,$sql);
		$i = 1;
		while ($linha = mysqli_fetch_assoc($rs)) {
			$questoes[$i] = $linha['questao'];
			$respostaCorreta[$i] = $linha['respostaCorreta'];
			$resposta2[$i] = $linha['resposta2'];
			$resposta3[$i] = $linha['resposta3'];
			$i++;
		}

		$_SESSION['questoes'] = $questoes;
		$_SESSION['respostaCorreta'] = $respostaCorreta;
		$_SESSION['resposta2'] = $resposta2;
		$_SESSION['resposta3'] = $resposta3;
		$_SESSION['contagem'] = 1;

		echo "<script>window.location.href='jogocat2.php'</script>";}

	if (isset($_POST['cat3'])) {

		$sql = "SELECT * FROM cat3 ORDER BY RAND() LIMIT 11";
		$rs = mysqli_query($link,$sql);
		$i = 1;
		while ($linha = mysqli_fetch_assoc($rs)) {
			$questoes[$i] = $linha['questao'];
			$respostaCorreta[$i] = $linha['respostaCorreta'];
			$resposta2[$i] = $linha['resposta2'];
			$resposta3[$i] = $linha['resposta3'];
			$i++;
		}

		$_SESSION['questoes'] = $questoes;
		$_SESSION['respostaCorreta'] = $respostaCorreta;
		$_SESSION['resposta2'] = $resposta2;
		$_SESSION['resposta3'] = $resposta3;
		$_SESSION['contagem'] = 1;

		echo "<script>window.location.href='jogocat3.php'</script>";
	}

	if (isset($_POST['cat4'])) {
		
		$sql = "SELECT * FROM cat4 ORDER BY RAND() LIMIT 11";
		$rs = mysqli_query($link,$sql);
		$i = 1;
		while ($linha = mysqli_fetch_assoc($rs)) {
			$questoes[$i] = $linha['questao'];
			$respostaCorreta[$i] = $linha['respostaCorreta'];
			$resposta2[$i] = $linha['resposta2'];
			$resposta3[$i] = $linha['resposta3'];
			$i++;
		}

		$_SESSION['questoes'] = $questoes;
		$_SESSION['respostaCorreta'] = $respostaCorreta;
		$_SESSION['resposta2'] = $resposta2;
		$_SESSION['resposta3'] = $resposta3;
		$_SESSION['contagem'] = 1;

		echo "<script>window.location.href='jogocat4.php'</script>";
	}

	if (isset($_POST['cat5'])) {
		
		$sql = "SELECT * FROM cat5 ORDER BY RAND() LIMIT 11";
		$rs = mysqli_query($link,$sql);
		$i = 1;
		while ($linha = mysqli_fetch_assoc($rs)) {
			$questoes[$i] = $linha['questao'];
			$respostaCorreta[$i] = $linha['respostaCorreta'];
			$resposta2[$i] = $linha['resposta2'];
			$resposta3[$i] = $linha['resposta3'];
			$i++;
		}

		$_SESSION['questoes'] = $questoes;
		$_SESSION['respostaCorreta'] = $respostaCorreta;
		$_SESSION['resposta2'] = $resposta2;
		$_SESSION['resposta3'] = $resposta3;
		$_SESSION['contagem'] = 1;

		echo "<script>window.location.href='jogocat5.php'</script>";
	}
?>