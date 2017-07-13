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
		<div class="produto-back">
			<div class="container">
				<div class="produto">
					<h1>Fuzzy Cardigan</h1>
					<p>por apenas R$129,00</p>
					<form action="checkout.php" method="post">
						<fieldset class="cores">
							<legend>Escolha a cor:</legend>
							<input type="radio" name="cor" id="verde" value="Verde" checked>
							<label for="verde">
								<img src="img/produtos/foto2-verde.png">
							</label>
							<input type="radio" name="cor" id="rosa" value="Rosa">							
							<label for="rosa">
								<img src="img/produtos/foto2-rosa.png">
							</label>
							<input type="radio" name="cor" id="azul" value="Azul">
							<label for="azul">
								<img src="img/produtos/foto2-azul.png">
							</label>
						</fieldset>
						<fieldset class="tamanhos">
							<legend>Escolha o tamanho:</legend>
							<input type="range" min="36" max="46" step="2" name="tamanho" id="tamanho">
						</fieldset>
						<input type="submit" class="comprar" value="comprar">
						<input type="hidden" name="nome" value="Fuzzy Cardigan">
						<input type="hidden" name="preco" value="129,00">
					</form>
				</div>
				<div class="detalhes">
					<h2>Detalhes do Produto</h2>

					<p>Esse é o melhor Fuzzy Cardigan que você já viu. Excelente material italiano com estampa desenhada pelos artẽsãos da comunidade de Krotos nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a jato.</p>
					<table>
						<thead>
							<tr>
								<th>Caracterísitca</th>
								<th>Detalhe</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Modelo</td>
								<td>Fuzzy Cardigan 7845</td>
							</tr>
							<tr>
								<td>Material</td>
								<td>Algodão e Poliester</td>
							</tr>					
							<tr>
								<td>Cores</td>
								<td>Verde, Azul e Rosa</td>
							</tr>
							<tr>
								<td>Lavagem</td>
								<td>Lavar a mão</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php include("footer.php"); ?>
	</body>
</html>