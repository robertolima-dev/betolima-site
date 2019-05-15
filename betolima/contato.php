<?php 

include 'header.php';
include 'layout/layout.php';

?>

<body>
	<div class="container" style="margin-top: 100px;">


		<?php if(isset($_GET['contato']) && $_GET['contato'] == 'sucesso') { ?>
			<div class="alert alert-success text-center">
				Sua mensagem foi enviada com sucesso, entraremos em contato em breve!
			</div>
		<?php } ?>

		<?php if(isset($_GET['contato']) && $_GET['contato'] == 'erro') { ?>
			<div class="alert alert-danger text-center">
				Houve um erro ao enviar a mensagem, tente novamente mais tarde!
			</div>
		<?php } ?>


		<div class="row">
			<div class="col-12 text-center">
				<h3>ap lima | contato</h3>
				<p class="mt-5 mb-3">
					"Conhecer as obras de um artista revelam sentimentos que foram expressos em um determinados momentos e que ficarão eternizados para sempre"
				</p>
				<div class="p-2">
					<hr>
				</div>
			</div>
		</div>

		<form class="form-group" action="process/cadastrar/contato.php" method="post">
			<div class="row mt-5 mb-5">
				<div class="col-md-6">
					<div class="p-2">
						<label>nome:</label>
						<input type="text" name="nome" class="form-control">
					</div>
					<div class="p-2">
						<label>telefone:</label>
						<input type="text" name="telefone" class="form-control">
					</div>
					<div class="p-2">
						<label>email:</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="p-2">
						<label>assunto:</label>
						<input type="text" name="assunto" class="form-control">
					</div>
					<div class="p-2">
						<label>mensagem:</label>
						<textarea type="text" name="mensagem" class="form-control" rows="5"></textarea>
					</div>

					<input type="hidden" name="status" value="0">

					<div class="p-2">
						<button type="submit" class="btn btn-success btn-block">enviar mensagem</button>
					</div>
				</div>
				<div class="col-md-6 d-none d-md-block mt-3 p-3">
					<img src="img/sonho.jpg" class="img-fluid" style="border: 3px solid #ccc;">
				</div>
			</div>
		</form>
	</div>
</body>


<?php include 'footer.php'; ?>