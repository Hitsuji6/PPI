<?php 
	include 'conexao.php';
		$sql = "SELECT * FROM ranking ORDER BY pontos DESC ";
			$rs = mysqli_query($link, $sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ranking</title>

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
			<li class="bordershadow" style="float: right;"><a style="background-color: #458DD0;" href="sobrenos.php">Sobre N??s</a></li>
			<li class="bordershadow" style="float: right;"><a href="adm.php">ADM</a></li>
		</ul>
			<h1 class="h1">Escolha a Categoria do Ranking</h1>
	</form>

	<center>
		<form class="form" action="#" method="POST">
			<fieldset class="fieldset" style="width: 300px; height: 320px;">
				<button name="rank1">Continentes</button><br>
					<p></p>
				<button name="rank2">Pa??ses, Linguas e Moedas</button><br>
					<p></p>
				<button name="rank3">Pa??ses e Capitais</button><br>
					<p></p>
				<button name="rank4">Estados e Capitais do Brasil</button><br>
					<p></p>
				<button name="rank5">Oceanos, Mares e Lagos</button><br>
					<p></p>

			</fieldset>
		</form>
	</center>

</body>
</html>

<?php  
	if (isset($_POST['rank1'])) {

		echo "<script>window.location.href='rank1.php'</script>";
	}

	if (isset($_POST['rank2'])) {
		
		echo "<script>window.location.href='rank2.php'</script>";
	}

	if (isset($_POST['rank3'])) {
		
		echo "<script>window.location.href='rank3.php'</script>";
	}

	if (isset($_POST['rank4'])) {
		
		echo "<script>window.location.href='rank4.php'</script>";
	}

	if (isset($_POST['rank5'])) {
		
		echo "<script>window.location.href='rank5.php'</script>";
	}
?>