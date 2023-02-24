<?php 

	session_start();
	include 'conexao.php';
		$sql = "SELECT * FROM cadastro ORDER BY nome ";
			$rs = mysqli_query($link, $sql);
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro</title>

	<style>
		html {
  			scroll-behavior: smooth;
		}

		input[type = email]{
				text-align: center;
				width: 200px;
				background-color: rgb(240, 240, 240);
			}

			input[type = password]{
				text-align: center;
				width: 200px;
				background-color: rgb(240, 240, 240);
			}

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

			.input[type = checkbox]{
				margin-bottom: 20px;
			}

			body{
				background-image: url(font&img/wallpaper.jpg);
				background-size: cover;
				margin: 0;
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

			button:link, button:visited {
  				background-color: #f44336;
  				color: white;
  				padding: 14px 25px;
  				text-align: center; 
  				text-decoration: none;
  				display: inline-block;
			}

			button:hover, button:active {
				 background-color: white;
			}

			@font-face {
   				font-family: MyFont;
   				src: url(font&img/BreatheFire.otf);
			}

			*{
   				font-family: MyFont;
			}

			a{
				color: inherit;
			}

			a:link {
				text-decoration: none;
			}
	</style>

	<style>
		.fieldset{
			align-items: center;
			background-image: linear-gradient(#c6c49e, #a29d43);			
			border-color: black; 
			color: black;
		}

		.p{
			text-align: center;
		}

		.form{
			position: fixed;
   			top: 30%;
   			right: 42%;
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

		.div{
			color: black;
		}

	</style>

	<style>
		#cantos {
  			border-radius: 15px;
  			background: white;
  			background-position: left top;
  			background-repeat: repeat; 
  			width: 250px; 
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
<body>
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
	</form>

	<center>
	<form  class="form" action="#" method="POST">
		<fieldset class="fieldset" style="width: 300px; height: 400px;">
			<p class="p">Cadastro</p>
				<input type="text" name="nome" placeholder="Nome" id="cantos" required><br>
				<input type="text" name="sobrenome" placeholder="Sobrenome" id="cantos" required><br>
				<input type="email" name="email" placeholder="E-mail" id="cantos" required><br>
				<input type="password" name="senha" min="4" max="20" placeholder="Senha" id="cantos" required><br>
				<input type="password" name="senha2" min="4" max="20" placeholder="Confirmar a Senha" id="cantos" required><br>
				<p></p>
				<button name="enviar" class="bordershadow">Confirmar</button>
				<input type="reset" name="cancelar" value="Cancelar" class="bordershadow"><br>
				<table>
					<tr>
						<td>
							<input type="checkbox" name="termos" class="input" required>
						</td>
						<td>
							<div class="div">Concordo e aceito os <a href="termos.php" style="color: white;">termos e licenças de EarthMaze</a></div>
						</td>
					</tr>

					<tr>
						<td>
							<input type="checkbox" name="lembrete" value="sim">
						</td>
						<td>
							<div class="div"> Lembre-me</div>
						</td>
					</tr>
				</table>
		</fieldset>
	</form>
	</center>

</body>
</html>

<?php 

	if (isset($_POST['enviar'])){

		$min = 0;
		$max = 100;

		$lembrete = $_POST['lembrete'];
		$_SESSION['lembrete'] = $lembrete; 
		$id = rand($min, $max);
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$email = $_POST['email'];
		$senha = md5($_POST['senha']);
		$senha2 = md5($_POST['senha2']);

		if ($senha == $senha2) {

		$inserira = "INSERT INTO cadastro VALUES ('$id', '$nome','$sobrenome','$email','$senha','0')";
		$inserirb = "INSERT INTO rank1 VALUES ('$nome','$sobrenome', '0')";
		$inserirc = "INSERT INTO rank2 VALUES ('$nome','$sobrenome', '0')";
		$inserird = "INSERT INTO rank3 VALUES ('$nome','$sobrenome', '0')";
		$inserire = "INSERT INTO rank4 VALUES ('$nome','$sobrenome', '0')";
		$inserirf = "INSERT INTO rank5 VALUES ('$nome','$sobrenome', '0')";


		$inserira = utf8_encode($inserira);
		$inserirb = utf8_encode($inserirb);
		$inserirc = utf8_encode($inserirc);
		$inserird = utf8_encode($inserird);
		$inserire = utf8_encode($inserire);
		$inserirf = utf8_encode($inserirf);

		mysqli_query($link, $inserira);
		mysqli_query($link, $inserirb);
		mysqli_query($link, $inserirc);
		mysqli_query($link, $inserird);
		mysqli_query($link, $inserire);
		mysqli_query($link, $inserirf);

		echo "<script>alert('Cadastro Efetuado com Sucesso ');</script>";
		}

		else{
			echo "<script>alert('Senhas não Coincidem');</script>";
		}

	}

?>