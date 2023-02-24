<?php  
	session_start();
	include('conexao.php');

	$email = $_SESSION['email'];
	$pontos = $_SESSION['pontos'] * 10;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Resultados</title>

	<script>
		setTimeout(function() {
   			window.location.href = "ranking.php";
		}, 7000);

	</script>

	</style>

		<style>
			html {
  			scroll-behavior: smooth;
			}

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

			.form{
				position: fixed;
   				top: 45%;
   				right: 42%;
   				
			}

			.fieldset{
				border-style: none;
			}

			.h2{
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
 				padding: 50px 100px;
 				margin: 0 auto;
 				top: 100px;
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
		  	animation: progress-animation 7s 11;
		   	transition: all 0.2s ease;
		}

		@keyframes progress-animation{
		    0% { width: 0%; }
		    
		    100% { width: 100%}
		}

	</style>

</head>
<body class="body">
	<h1 class="h1">Carregando resultados</h1>

	<center>
		<h2 class="h2">Você acertou <?php echo $_SESSION['pontos']; ?> Pergunta(s)</h2>
	</center>

	<center>
		<form class="form">
			<fieldset class="fieldset">
				<?php
					if ($_SESSION['pontos'] == 0) {
						echo "<img src='font&img/maepingu.gif' alt='Pingu'>";
					}

					elseif ($_SESSION['pontos'] > 0 and $_SESSION['pontos'] < 4) {
						echo "<img src='font&img/pingu0.gif' alt='Pingu'>";
					}

					elseif ($_SESSION['pontos'] >= 4 and $_SESSION['pontos'] < 6) {
						echo "<img src='font&img/pingu5.gif' alt='Pingu'>";
					}

					elseif ($_SESSION['pontos'] >= 6 and $_SESSION['pontos'] < 8) {
						echo "<img src='font&img/pingu7.gif' alt='Pingu'>";
					}

					elseif ($_SESSION['pontos'] >= 8 and $_SESSION['pontos'] <= 10) {
						echo "<img src='font&img/pingu.gif' alt='Pingu'>";
					}
				?>
			</fieldset>
		</form>		
	</center>

	<div class="prog-container">
		<div class="progress-bar">
			
		</div>
	</div>
</body>
</html>

<?php
	$sql = "SELECT * FROM cadastro WHERE email = '$email'";
		$rs = mysqli_query($link, $sql);

		$comando = mysqli_fetch_assoc($rs);

			$nome = $comando['nome'];
			$sobrenome = $comando['sobrenome'];

				$inserir =  "UPDATE rank5 SET nome = '$nome', sobrenome = '$sobrenome', pontos = '$pontos' WHERE rank5 . nome = '$nome' ";

				//$inserir = "INSERT INTO ranking VALUES ('$nome', '$sobrenome', '$pontos') WHERE ranking . nome = '$nome' ";

				mysqli_query($link, $inserir);
?>