<?php 

include 'header.php';
include 'layout/layout.php';

include 'controller/Obra.php';

?>

<body>
	<div class="container" style="margin-top: 100px;">

		<div class="row">
			<div class="col-12 text-center">
				<h3>ap lima | portfólio</h3>
				<p class="mt-5 mb-3">
					"Pintar, transporta-me ao mundo imaginário. Lá, brincando, as cores captam a história que queremos contar."
				</p>
				<div class="p-2 mb-5">
					<hr>
				</div>
			</div>
		</div>		

		<div class="row">
			<div class="col-12 text-center">

				<?php echo $obraObj->cardObraPortfolio() ?>
				
			</div>
		</div>

	</div>
</body>


<?php include 'footer.php'; ?>