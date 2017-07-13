<!DOCTYPE html>
<html>
	<head>
		<title>Mirror Fashion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/produto.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width:939px)">
	</head>
	<body>
		<?php include("header.php"); ?>
		<div class="container">
			<div class="produto">
				<h1>Fuzzy Cardigan</h1>
				<p>por apenas R$129,00</p>
				<form>
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>
						<input type="radio" id="verde" name="cor" checked>
						<label for="verde"><img src="img/produtos/foto2-verde.png"></label>
						<input type="radio" id="rosa" name="cor">
						<label for="rosa"><img src="img/produtos/foto2-rosa.png"></label>
						<input type="radio" id="azul" name="cor">
						<label for="azul"><img src="img/produtos/foto2-azul.png"></label>
					</fieldset>
					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>
						<input type="range" min="36" max="46" step="2" name="tamanho" id="tamanho">
					</fieldset>
					<input type="submit" class="comprar" value="comprar">
				</form>
			</div>
		</div>
		<?php include("footer.php"); ?>
	</body>
</html>