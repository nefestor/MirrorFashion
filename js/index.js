var banners = ["img/destaque-home.png", "img/destaque-home-2.png", "img/destaque-home-3.png"];
var bannerAtual = 0;
var timer = setInterval(trocarBanner, 4000);
var controle = document.querySelector(".pause");

function trocarBanner() {
	bannerAtual = (bannerAtual + 1) % 3;
	document.querySelector ("#destaque").src = banners[bannerAtual];
}
controle.onclick = function() {
	if(controle.className == "pause") {
		clearInterval(timer);
		controle.className = "play";
	} else {
		timer = setInterval(trocarBanner, 4000);
		controle.className = "pause";
	}
	return false;
};

$(".novidades ").addClass("painel-compacto");

$(".novidades button").click(function() {
	$(".novidades").removeClass("painel-compacto");
});

$(".mais-vendidos ").addClass("painel-compacto");

$(".mais-vendidos button").click(function() {
	$(".mais-vendidos").removeClass("painel-compacto");
});