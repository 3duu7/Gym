<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$this->title = 'Abdominales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rutina-abdominal">

	<button onclick="mostrarNivel('nivel1')">Nivel 1</button>
	<button onclick="mostrarNivel('nivel2')">Nivel 2</button>
	<button onclick="mostrarNivel('nivel3')">Nivel 3</button>

   	<div id="nivel1" class="niveles">
    	<iframe class="size-videos" src="https://www.youtube.com/embed/IJa1EBbIjLM?si=DLoTjNy1FOctgS7P&amp;clip=Ugkx7xhjxQRXeZBASJ94dptN4JGI7qWLAP0K&amp;clipt=EKrlCBjC2gk&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	</div>

	<div id="nivel2" class="niveles" style="display:none;">
	    <iframe class="size-videos" src="https://www.youtube.com/embed/IJa1EBbIjLM?si=1hwTW3vAxlp8brkJ&amp;clip=UgkxwzxL9YwG1Bj613fo2VhAHLcgDLgNqxvO&amp;clipt=EO3sChiF4gs&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	</div>

	<div id="nivel3" class="niveles" style="display:none;">
	    <iframe class="size-videos" src="https://www.youtube.com/embed/IJa1EBbIjLM?si=_z7gYRbbCk8HTocd&amp;clip=UgkxZdHpJCYf-3sAMZfAh_hFpIgTqWVlDapU&amp;clipt=EIjQDBjzsA0&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	</div>

    <iframe class="size-videos" src="https://www.youtube.com/embed/IrA9dvgRKR0?clip=Ugkxa3nklFPzp2qw8mF4Jocm--wbz4HpPcQ8&amp;clipt=EKWVBBitvAQ&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <iframe class="size-videos" src="https://www.youtube.com/embed/CtPSX5tAkcI?si=VUuH1kHTTZjA4Thj&amp;clip=UgkxcHvop8AFwZAQIncc73xtDe1nVtJz2leC&amp;clipt=EMWTJhjdiCc&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>
<script type="text/javascript">
	function mostrarNivel(nivel) {
    var niveles = document.getElementsByClassName("niveles");
    for (var i = 0; i < niveles.length; i++) {
        niveles[i].style.display = "none";
    }
    document.getElementById(nivel).style.display = "block";
}

</script>