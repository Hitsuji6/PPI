<?php
	
	session_start();
	include('conexao.php');

	$sql = "SELECT * FROM cat1 ORDER BY RAND() LIMIT 11";
		$rs = mysqli_query($link,$sql);

	$contagem = $_SESSION['contagem'];

	$x = rand(1,6);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Estados e Capitais do Brasil</title>

	<script>
		setTimeout(function() {
   			window.location.href = "jogo.php";
		}, 9000);

	</script>

	</style>

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
				font-size: 50px;
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

		<style>

		.prog-container {
			width: 90%;
			height: 20px;
			background: #515B52;
			box-shadow: 1px 1px 1px 1px #333333;
			position: absolute;
			bottom: 20px;
			left: 5%;
		}

		.progress-bar{
		  	width: 100%;
			height: 100%;;
		   	background-color: #64B6AC;
		  	animation: progress-animation 9s 11;
		   	transition: all 0.2s ease;
		}

		@keyframes progress-animation{
		    0% { width: 0%; }
		    
		    100% { width: 100%}
		}

	</style>

	<style>
		.btn{
			display: inline;
  			outline:none;
  			border: none;
  			cursor: pointer;
 			position: relative;
 			background-color: #DED5A6;
 			font-size: 16px;
 			font-weight: 300px;
 			color: black;
 			text-transform: uppercase;
 			letter-spacing: 2px;
 			padding: 25px 80px;
 			margin: 0 auto;
 			border-radius: 20px;
  			box-shadow: 0 6px #C6C49E;
  			top: 300px;
		}

		.btn:hover{
  			box-shadow: 0 4px #C6C49E;
 			top: 302px;
		}

		.btn:active{
  			box-shadow: none;
  			top: 306px;
		}

		.h3{
			display: inline;
  			outline:none;
  			border: none;
  			cursor: pointer;
 			position: relative;
 			background-image: linear-gradient(#c6c49e, #a29d43);
 			font-size: 16px;
 			font-weight: 300px;
 			color: black;
 			text-transform: uppercase;
 			letter-spacing: 2px;
 			padding: 70px 100px;
 			margin: 0 auto;
 			top: 200px;
		}

	</style>

</head>
<body class="body">
	<form action="#" method="POST">

		<center>
		<form action="#" method="POST">

			<h2 class="h1"><?php echo "Fase " . $contagem . ":<br/><br/>"; ?></h2>

			<?php 

				echo "<h3 class='h3'>";
				$questoes = $_SESSION['questoes'];
					echo utf8_decode($questoes[$contagem]);
				echo "</h3>";
			?>

			<p></p>
			<p></p>

			<?php if ($x == 1) { 
				$respostaCorreta = $_SESSION['respostaCorreta'];
				$resposta2 = $_SESSION['resposta2'];
				$resposta3 = $_SESSION['resposta3'];
				?>
				<button class="btn" name="respostaCorreta"><?php echo utf8_decode($respostaCorreta[$contagem]); ?></button>
				<button class="btn" name="resposta2"><?php echo utf8_decode($resposta2[$contagem]); ?></button>
				<button class="btn" name="resposta3"><?php echo utf8_decode($resposta3[$contagem]); ?></button>

			<?php } ?>

			<?php if ($x == 2) { 
				$respostaCorreta = $_SESSION['respostaCorreta'];
				$resposta2 = $_SESSION['resposta2'];
				$resposta3 = $_SESSION['resposta3'];
				?>
				<button class="btn" name="respostaCorreta"><?php echo utf8_decode($respostaCorreta[$contagem]); ?></button>
				<button class="btn" name="resposta3"><?php echo utf8_decode($resposta3[$contagem]); ?></button>
				<button class="btn" name="resposta2"><?php echo utf8_decode($resposta2[$contagem]); ?></button>

			<?php } ?>

			<?php if ($x == 3) { 
				$respostaCorreta = $_SESSION['respostaCorreta'];
				$resposta2 = $_SESSION['resposta2'];
				$resposta3 = $_SESSION['resposta3'];
				?>
				<button class="btn" name="resposta3"><?php echo utf8_decode($resposta3[$contagem]); ?></button>
				<button class="btn" name="resposta2"><?php echo utf8_decode($resposta2[$contagem]); ?></button>
				<button class="btn" name="respostaCorreta"><?php echo utf8_decode($respostaCorreta[$contagem]); ?></button>

			<?php } ?>

			<?php if ($x == 4) { 
				$respostaCorreta = $_SESSION['respostaCorreta'];
				$resposta2 = $_SESSION['resposta2'];
				$resposta3 = $_SESSION['resposta3'];
				?>
				<button class="btn" name="resposta3"><?php echo utf8_decode($resposta3[$contagem]); ?></button>
				<button class="btn" name="respostaCorreta"><?php echo utf8_decode($respostaCorreta[$contagem]); ?></button>
				<button class="btn" name="resposta2"><?php echo utf8_decode($resposta2[$contagem]); ?></button>

			<?php } ?>

			<?php if ($x == 5) { 
				$respostaCorreta = $_SESSION['respostaCorreta'];
				$resposta2 = $_SESSION['resposta2'];
				$resposta3 = $_SESSION['resposta3'];
				?>
				<button class="btn" name="resposta2"><?php echo utf8_decode($resposta2[$contagem]); ?></button>
				<button class="btn" name="respostaCorreta"><?php echo utf8_decode($respostaCorreta[$contagem]); ?></button>
				<button class="btn" name="resposta3"><?php echo utf8_decode($resposta3[$contagem]); ?></button>

			<?php } ?>

			<?php if ($x == 6) { 
				$respostaCorreta = $_SESSION['respostaCorreta'];
				$resposta2 = $_SESSION['resposta2'];
				$resposta3 = $_SESSION['resposta3'];
				?>
				<button class="btn" name="resposta2"><?php echo utf8_decode($resposta2[$contagem]); ?></button>
				<button class="btn" name="resposta3"><?php echo utf8_decode($resposta3[$contagem]); ?></button>
				<button class="btn" name="respostaCorreta"><?php echo utf8_decode($respostaCorreta[$contagem]); ?></button>

			<?php } ?>

		</form>
		</center>

		<div class="prog-container">
			<div class="progress-bar">
			
			</div>
		</div>
	</form>

</body>
</html>
<?php
	if (isset($_POST['respostaCorreta'])) {
				$_SESSION['pontos']++;
			}

				$_SESSION['contagem']++;

			
			if ($_SESSION['contagem'] == 12) {
				echo "<script>window.location.href='resultados4.php'</script>";
			}
?>