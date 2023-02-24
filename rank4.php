<?php 
include 'conexao.php';
		$sql = "SELECT * FROM rank4 ORDER BY pontos DESC ";
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

			table{
				border-collapse: collapse;
  				width: 50%;
  				background-image: linear-gradient(#c6c49e, #a29d43);
			}

			th, td {
  				padding: 8px;
  				text-align: left;
  				border-bottom: 1px solid #ddd;
  				text-align: center;
			}

			tr:hover {
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
			<h1 class="h1">Ranking:</h1>
	</form>

	<center>
		<form action="#" method = "POST">
 			<table>
 				<thead>
 					<th>Nome</th>
 					<th>Sobrenome</th>
 					<th>Pontos</th>
 				</thead>

 		<?php 

 			while ($linha = mysqli_fetch_array($rs)) {
 				echo "<tr>";
 					echo "<td>";
 						echo $linha['nome']  . "";
 					echo "</td>";
 					echo "<td>";
 						echo $linha['sobrenome'] . "";
 					echo "</td>";
 					echo "<td>";
 						echo $linha['pontos'] . "";
 					echo "</td>";
 				echo "</tr>";
 			}


 		 ?>
			</table>
		</form>
	</center>
 </body>
 </html>