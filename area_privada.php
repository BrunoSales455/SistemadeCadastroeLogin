<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("location: index.php");
		exit;
	}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<meta charset="utf-8">
	<title>Nossos conteudos</title>
	<link rel="stylesheet" type="text/css" href="style_area_privada.css">
</head>

<body>
	
	<form class="formulario1" action="">
		<div class="container">
			<div class="container-a">
				<img src="imagem/vitor.jpg"  widht=100px height=100px>
				<h2>Vitor Meneghetti</h2>
				<hr> <br>
				<p><strong><a href="#duvidas-minhas" style="color: black">Concluimos que:</strong></p>
				<br>
				<a href="https://www.linkedin.com/in/vitor-meneghetti-peristrello/" target="_blank">
				<img src="imagem/ldk.jpeg" title="LinkdIn" widht=30px height=50px>  </a>
			
			</div>
		</div>
	</form>


	<form class="formulario1" action=""> 
		<div class="container"> 
			<div class="container-a">
				<img src="imagem/matheus2.jpeg" widht=100px height=100px>
				<h2>Matheus Soldner</h2>
				<hr> <br>
				<p><strong><a href="#duvidas-minhas" style="color: black">Concluimos que:</strong></p>
				<br>
				<a href="https://www.linkedin.com/in/matheus-soldner-031b8316a/" target="_blank">
				<img src="imagem/ldk.jpeg" title="LinkdIn" widht=50px height=50px> </a>
			</div>
		</div>
	</form>


	<form class="formulario1" action="">
		<div class="container"> 
			 <div class="container-a">
				<img src="imagem/daniel.jpeg" widht=100px height=100px>
				<h2>Daniel Oliveira</h2>
				<hr> <br>
				<p><strong><a href="#duvidas-minhas" style="color: black">Concluimos que:</strong></p>
				<br>
				<a href="https://www.linkedin.com/in/daniel-oliveira-6446701a9/" target="_blank">
				<img src="imagem/ldk.jpeg" title="LinkdIn" widht=50px height=50px> </a>
				
			</div>
		</div>
	</form>

	<form class="formulario1" action="">
		<div class="container"> 
			<div class="container-a">
				<img src="imagem/bruno.jpeg" widht=100px height=100px>
				<h2>Bruno Sales</h2>
				<hr> <br>
				<p><strong><a href="#duvidas-minhas" style="color: black">Concluimos que:</strong></p>
				<br>
				<a href="https://www.linkedin.com/in/bruno-sales-8bba8219b/" target="_blank"> 
				<img src="imagem/ldk.jpeg" title="LinkdIn" widht=50px height=50px></a>
				
			</div>
		</div>
	</form>

	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  


	<form class="formulario2" action="">
		<div class="container" style=" width: 1270px"> 
			<div class="container-a">
			<h2 id="duvidas-minhas">TERMINAMOS</h2> <br>
			<p><strong>Curso: </strong> TADS - Tecnólogo Análise e Desenvolvimento de Sistemas <br>
				<strong>Disciplina: </strong> Projeto Prático de Programação <br>
				<strong>Professor: </strong> Edson Melo de Souza <br>
				<strong>Data de entrega: </strong> 31/05/2021 <br> <br> <br>
			</p>

			<img src="imagem/fogos.gif" width="350px" height="350px">

			</div>
		</div>
	</form>




</body>
</html>


