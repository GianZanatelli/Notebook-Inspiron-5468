<?php
$projetos = [

];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gian Valério Zanatelli</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="cabecalho-principal">
		<div class="logo">Gian</div>
		<nav class="menu-superior">
			<button class="button-icon">🌐</button>
			<button class="button-icon" id="toggle-theme">🌙</button>
			<button class="button-icon" id="button-menu">☰</button>
		</nav>
	</header>
	<aside class="menu-lateral" id="sidebar">
		<button id="button-fechar">X</button>
		<ul>
			<li><a href="#">Perfil</a></li>
			<li><a href="#">Configurações</a></li>
			<li><a href="#">Sair</a></li>
		</ul>
	</aside>
	<main>
		<h1>Bem-vindo!</h1>
		<p>Rodando em um servidor Linux local.</p>
		<P>Hoje é: <?php echo date('d/m/Y'); ?></p>
		<a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSl8F3UfCkgaGXEzwsyOXr3g1jag6CKt9hbfw&s">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSl8F3UfCkgaGXEzwsyOXr3g1jag6CKt9hbfw&s" alt="roblox">
		</a>
	</main>
	<script src="script.js"></script>
</body>
</html>
