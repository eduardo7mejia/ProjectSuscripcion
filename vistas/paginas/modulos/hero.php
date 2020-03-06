<!--=====================================
DISEÑO HERO - CINEMAGRAPH
======================================-->
<div class="container-fluid vistaVideo p-0 ">
	<video class="d-none d-lg-block " id="videoPresentacion " muted="muted" autoplay loop preload="auto" width="100%">
		<source data-nite-src="videos/video-principal.mp4" type="video/mp4">
	</video>

	<div class="filtroVideo"></div>
	<div class="container">
		<h1 class="text-center text-white pb-1 pb-lg-4">"Cursos Educativos"</h1>
		<div class="row">
			<div class="col-12 col-lg-4 p-3 p-sm-4">
				<div class="bg-white text-center py-5 px-4">
					<h4>Desarrollo web</h4>
					<p>Lorem ipsum dolor sit amet consectetur elit</p>
					<i class="fas fa-swatchbook  rounded rounded-circle text-white" style="background:#C1AA92"></i>
				</div>
			</div>
			<div class="col-12 col-lg-4 p-3 p-sm-4">

				<div class="bg-white text-center py-5 px-4" id="cursito">
					<h4>Redes</h4>
					<p>Lorem ipsum dolor sit amet consectetur elit</p>

					<i class="fas fa-network-wired rounded rounded-circle text-white" style="background:#A17A8C"></i>
					
				</div>

			</div>

			<div class="col-12 col-lg-4 p-3 p-sm-4">
				<div class="bg-white text-center py-5 px-4" id="cursito">
					<h4>Base de Datos</h4>
					<p>Lorem ipsum dolor sit amet consectetur elit</p>
					<i class="fas fa-laptop-code rounded rounded-circle text-white" style="background:#A1B287"></i>
				</div>
			</div>
			
		</div>

		<div class="mx-auto text-center py-3 py-lg-5">

			<a href="<?php echo $ruta; ?>registro"><button class="btn btn-info btn-lg mb-5">Crear cuenta gratis</button></a>

		</div>

	</div>

</div>