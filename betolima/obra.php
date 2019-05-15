<?php 

include 'header.php';
include 'layout/layout.php';

include 'controller/Obra.php';

?>


<body>
	<div class="container" style="margin-top: 100px;">

		<div class="row">
			<div class="col-12 text-center">

				<?php echo $obraObj->pagObra() ?>

			</div>
		</div>
	</div>
</body>


<?php include 'footer.php'; ?>