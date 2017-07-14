<!DOCTYPE html>
<html>

<head>
	<title>Sobre a Mirror Fashion</title>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/sobre.css">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width:939px)">

</head>

<body>
	<?php include("header.php"); ?>
	<article class="container">
		<h2>Mirror Fashion</h2>
		<section class="sobre">
			<p id="pr">
				A Mirror Fashion é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. Fundada há <?php print date(" Y") - 1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de participação em 118 deles.
			</p>

			<p>
				Nosso centro de distribuição fica em <a href="http://maps.google.com.br/?q=Jacarezinho" target = _blanc>Jacarezinho, no Paraná</a>. De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo todo.Nosso centro de distribuição:
			</p>

			<figure id="centro-distribuicao">
				<img src="img/centro-distribuicao.png" alt="Centro de distribuição da Mirror Fashion">
				<figcaption>Centro de distribuição da Mirror Fashion.</figcaption>
			</figure>

			<p>
				Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.php">nossa loja</a> ou entre em contato se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a href="#diferenciais">diferenciais</a>.
			</p>
		</section>
		<section class="historia">
			<h3 id="historia">História</h3>
			<p>
				A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A família Pelho, tradicional da região, investiu todas as suas economias nessa nova iniciativa, revolucionária para a época. O fundador Eduardo Simões Pelho, dotado de particular visão administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado de seu filho E. S. Pelho Filho, atual CEO. O nome da empresa é inspirado no nome da família.
			</p>

			<figure id="familia-pelho">
				<img src="img/familia-pelho.jpg">
				<figcaption>Família Pelho</figcaption>
			</figure>

			<p>
				O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões de usuários diferentes, em bilhões de diferentes pedidos.
			</p>

			<p>
				O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e nos escritórios em todo país.
			</p>

			<p>
				Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, homenagens e condecorações. Todos os presidentes do Brasil jámvisitaram as instalações da Mirror Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
			</p>
		</section>
		<section class="diferenciais">
			<h3 id="diferenciais">Diferenciais</h3>
			<ul>
				<li>Menor preço do varejo, garantido</li>
				<li>Se você achar uma loja mais barata, leva o produto de graça</li>
				<li>Pague em reais, dólares, euros ou bitcoins</li>
				<li>Todas as compras com frete grátis para o mundo todo</li>
				<li>Maior comércio eletrônico de moda do mundo</li>
				<li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
				<li>Presente em 124 países</li>
				<li>Mais de um milhão de funcionários em todo o mundo </li>
			</ul>
			<iframe class="video" width="100%" height="200" src="https://www.youtube.com/embed/Tb06abHE4hY" frameborder="0" allowfullscreen></iframe>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d918.8242061407727!2d-43.176638511921546!3d-22.902420199058785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5f35cdffbb%3A0xac684cd8ff59fb35!2sR.+do+Ouvidor%2C+50+-+Centro%2C+Rio+de+Janeiro+-+RJ%2C+20040-030!5e0!3m2!1spt-BR!2sbr!4v1500060645853" width="100%" height="200" frameborder="0" style="border:0; pointer-events:none;" allowfullscreen></iframe>
		</section>
	</article>
	<?php include("footer.php"); ?>
	<script src="js/jquery.js"></script>
</body>
</html>