<?php 

include 'header.php';
include 'layout/layout.php';

?>

<body>
	<div class="container" style="margin-top: 100px;">

		<div class="row">
			<div class="col-12 p-2 mb-5">
				<h3>Cadastrar Obra de Arte</h3>
				<hr>
			</div>
		</div>

		<form class="form-group" action="process/cadastrar/obra.php" method="post" enctype="multipart/form-data">

			<div class="row">
				<div class="col-md-6 p-2">
					<label>Título da obra</label>
					<input type="text" name="titulo" class="form-control">
				</div>
				<div class="col-md-6 p-2">
					<label>Título da obra para url</label>
					<input type="text" name="titulo_url" class="form-control">
				</div>
				<div class="col-md-6 p-2">
					<label>Tipo de pintura</label>
					<input type="text" name="tipo" class="form-control">
				</div>
				<div class="col-md-6 p-2">
					<label>Medidas em cm (alt vs comp)</label>
					<input type="text" name="medida" class="form-control">
				</div>
				<div class="col-md-6 p-2">
					<label>Valor</label>
					<input type="text" name="valor" class="form-control">
				</div>
				<div class="col-md-6 p-2">
					<label>Vendida</label>
					<select type="text" name="status_venda" class="form-control">
						<option value="1">Não está vendida</option>
						<option value="2">Sim, está vendida</option>
					</select>
				</div>

				<div class="col-12 mt-3 mb-3">
					<div>
						<label class="custom-file-label">imagem da obra</label>
						<input class="custom-file-input" type="file" name="upload_file" onchange="document.getElementById('blahCS').src = window.URL.createObjectURL(this.files[0])" style=" font-weight: lighter; font-size: 13px; border: 1px solid #06B7A3">
					</div>
				</div>
				<div  class="col-12 mt-3 mb-3">
					<iframe id="blahCS" width="100%" height="300"></iframe>
				</div>

				<div class="col-12 p-2">
					<label>Senha</label>
					<input type="password" name="password" class="form-control">
				</div>

				<input type="hidden" name="status" value="1">
				<input type="hidden" name="MAX_FILE_SIZE" value="5000000">

				<div class="col-12 p-2 mt-5 mb-5">
					<button type="submit" class="btn btn-success btn-block">Cadastrar Obra</button>
				</div>

			</div>
		</form>
	</div>
</body>


<?php include 'footer.php'; ?>