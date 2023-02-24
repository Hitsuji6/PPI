<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EarthMaze</title>
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

			blink{
        		animation: blinker 2.0s linear infinite;
       		}

      		@keyframes blinker {  
       			50% {
       				opacity: 0.5;
       			}
       		}
       			.blink-one {
        			animation: blinker-one 1.5s linear infinite;
       			}
       		@keyframes blinker-one {  
         		0% {
         			opacity: 0.5;
         		}
       		}
       			.blink-two {
         			animation: blinker-two 1.8s linear infinite;
       			}
       		@keyframes blinker-two {  
         		50% {
         			opacity: 0.2;
         		}
       		}

       		@keyframes blinker-three{
       			100%{
       				opacity: 1;
       			}
       		}
       			.blink-two {
         			animation: blinker-three 2.5s linear infinite;
       			}

			img {
    			position: fixed;
   				top: 30%;
   				right: 35%;
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
			<h1 class="h1">Bem-Vindo ao EarthMaze</h1>
	</form>

	<center>
		<form>
			<blink><img src="font&img/EarthMaze.png" ></blink>
		</form>
	</center>

</body>
</html>