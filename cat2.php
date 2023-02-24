<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Categoria 2</title>

	<style>

			input[type = text]{
				text-align: center;
				width: 200px;
				background-color: rgb(240, 240, 240);
			}

			input[type = number]{
				text-align: center;
				width: 200px;
				background-color: rgb(240, 240, 240);
			}

			input[type = reset]{
				text-align: center;
			}
			
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
			align-items: center;
			background-color: rgba(0, 0, 0, 0.8);
			border-color: black; 
			}

		</style>

		<style>
		#cantos {
  			border-radius: 15px;
  			background: white;
  			background-position: left top;
  			background-repeat: repeat; 
  			width: 300px; 
  			height: 30px; 
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
			<h1 class="h1">Categoria 2</h1>
	</form>

	<center>
		<form class="form" action="#" method="POST">
			<fieldset class="fieldset" style="width: 300px; height: 250px;">
				<input type="number" name="idquestao" placeholder="ID Questão" id="cantos"><br>
				<input type="text" name="questao" placeholder="Questão" id="cantos"><br>
				<input type="text" name="respostaCorreta" placeholder="Resposta Correta" id="cantos"><br>
				<input type="text" name="resposta2" placeholder="Resposta 2" id="cantos"><br>
				<input type="text" name="resposta3" placeholder="Resposta 3" id="cantos"><br>
				<p></p>
				<button name="cadastrar" class="bordershadow">Cadastrar</button>
				<input type="reset" name="cancelar" value="Cancelar" class="bordershadow"><br>
			</fieldset>
		</form>
	</center>
</body>
</html>
<?php
	if (isset($_POST['cadastrar'])){

		$idquestao = $_POST['idquestao'];
		$questao = $_POST['questao'];
		$respostaCorreta = $_POST['respostaCorreta'];
		$resposta2 = $_POST['resposta2'];
		$resposta3 = $_POST['resposta3'];

		$inserir = "INSERT INTO cat2 VALUES ('$idquestao', '$questao','$respostaCorreta','$resposta2','$resposta3')"; 

		$inserir = utf8_encode($inserir);

		mysqli_query($link,$inserir);
	}

?>