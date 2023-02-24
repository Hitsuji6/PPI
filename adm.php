<?php
	session_start();
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADM Login</title>

	<style>

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

			input[type = checkbox]{
				margin-bottom: 20px;
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

			.h2{
				color: black;
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
			background-image: linear-gradient(#c6c49e, #a29d43);
			border-color: black; 
			color: black;
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
			<h1 class="h1">Login</h1>
	</form>

	<center>
		<form class="form" action="#" method="POST">
			<fieldset class="fieldset" style="width: 300px; height: 250px;">
				<h2 class="h2">Acesso Restrito Para Pessoal Autorizado</h2>
				<input type="email" name="email" placeholder="E-mail" id="cantos"><br>
				<input type="password" name="senha" min="4" max="20" placeholder="Senha" id="cantos"><br>
				<p></p>
				<button name="logar" class="bordershadow" >Logar</button>
				<input type="reset" name="cancelar" value="Cancelar" class="bordershadow"><br>
			</fieldset>
		</form>
	</center>
</body>
</html>

<?php
	if(isset($_POST['logar'])){

				if (isset($_POST['email']) && isset($_POST['senha'])) {
					$email = $_POST['email'];
					$senha = md5($_POST['senha']);
					


						$sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha' AND adm = '1'";
						$verificar = mysqli_query($link, $sql) or die ("Da um echo no sql");
						$registro = mysqli_fetch_array($verificar);
							if (mysqli_num_rows($verificar) == 1) {
								setcookie("email", $email, time() + 3600);
								setcookie("senha", $senha, time() + 3600);
								$_SESSION['email'] = $email;
								$_SESSION['adm'] = $registro['adm'];
								header('Location: admcate.php');
							}
							else{
								echo "<script>alert('E-mail ou Senha incorretos // ou Você Não é um ADM');</script>";
							}
				}
	}
?>