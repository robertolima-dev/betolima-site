<?php 

include 'header.php';
include 'layout/layout.php';

include 'controller/Obra.php';

?>

<body>

	<div style="margin-top: 50px;">
		<img src="img/capa1.png" style="width: 100%; border-bottom: 4px solid #ccc;">
	</div>

	<div class="container-fluid" style="margin-top: 50px;">

		<section class="p-5">
			<h2 class="text-center">ap lima | apresentação</h2>
			<p class="text-center mt-4">
				Entre notas musicas, desenhos, pincéis, letras, poesias e outras formas de expressões artisisticas, aplima iniciou sua vida artística ainda na infância, desenhando em caixas de madeira na feira enquanto trabalhava. a arte sempre foi e sempre será seu principal meio de comunicação com o mundo...
			</p>
			<p class="text-center">
				"A arte alimenta-se de ingenuidades, de imaginações infantis que ultrapassam os limites do conhecimento; é aí que se encontra o seu reino. Toda a ciência do mundo não seria capaz de penetrá-lo."
			</p>
			<span><i>"Lionello Venture"</i></span>
		</section>


		<hr class="ml-5 mr-5 mb-5">

		<section id="section-home">
			<dir class="container-fluid">
				<div class="row">

					<div class="col-md-6">

						<!-- teste carrousel -->
						<div id="carousel-controles" class="carousel slider" data-ride="carousel">
							<div class="carousel-inner">

								<div class="carousel-item active">
									<img src="img/quadro4.jpg" class="img-fluid">
								</div>

								<div class="carousel-item">
									<img src="img/quadro2.jpg" class="img-fluid">
								</div>

								<div class="carousel-item">
									<img src="img/quadro6.jpg" class="img-fluid">
								</div>

							</div>

							<!-- controle -->
							<a href="#carousel-controles" class="carousel-control-prev" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a href="#carousel-controles" class="carousel-control-next" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>

						</div>
						<!-- teste carrousel -->

					</div>

					<div class="col-md-6 align-self-center home-text">
						<h2 class="mb-5">
							ap lima | pintura a óleo
						</h2>
						<p>
							A pintura a óleo é uma técnica, que se utiliza de tintas a óleo, aplicadas com pincéis, espátulas, ou outros meios, sobre telas de tecido, superfícies de madeira ou outros materiais.<br><br>A popularidade da pintura a óleo atribui-se à extraordinária versatilidade que oferece ao artista conferindo magníficos resultados nas técnicas tradicionais e excelente e consistente qualidade.
						</p>
					</div>


					<div class="col-md-6 align-self-center home-text">
						<h2 class="mb-5">
							ap lima | textura com tinta acrílica
						</h2>
						<p>
							Textura pode ser definida como uma massa usada por artistas plásticos, para dar formas e desenhos diferentes nas paredes. As técnicas de pinturas texturizadas só chegaram ao Brasil na década de 1990, embora já existissem na Europa como um método de combater a umidade em paredes.<br><br>Atualmente, a textura tem sido bastante utilizada para proporcionar um ambiente mais moderno e ousado.
						</p>
					</div>

					<div class="col-md-6 mt-5 mb-5">

						<div id="carousel-controles2" class="carousel slider" data-ride="carousel">
							<div class="carousel-inner">

								<div class="carousel-item active">
									<img src="img/quadro13.jpg" class="img-fluid">
								</div>

								<div class="carousel-item">
									<img src="img/quadro14.jpg" class="img-fluid">
								</div>

								<div class="carousel-item">
									<img src="img/quadro15.jpg" class="img-fluid">
								</div>

							</div>

							<!-- controle -->
							<a href="#carousel-controles2" class="carousel-control-prev" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a href="#carousel-controles2" class="carousel-control-next" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>

						</div>
						<!-- teste carrousel -->

					</div>

				</div>
			</dir>
		</section>

		<hr class="ml-5 mr-5">

		<section class="mb-5">

			<h2 class="mt-5 mb-5 text-center">ap lima | portfólio</h2>

			<?php echo $obraObj->cardObraIndex() ?>

		</section> 


	</div>
</body>


<?php include 'footer.php'; ?>