<?php

class Obra {

	public $id_obra = null;
	public $titulo = null;
	public $titulo_url = null;
	public $tipo = null;
	public $valor = null;
	public $medida = null;
	public $status_venda = null;
	public $status = null;
	public $nome_img = null;

	public function __set($attribute, $value) {
		$this->$attribute = $value;
	}

	public function __get($attribute) {
		return $this->$attribute;
	}

	public function cardObraIndex() {

		$html = '';

		include '../betolimaOff/conexao.php';

		$query="SELECT * FROM tb_obra";

		$stmt = $conexao->query($query);
		$obras = $stmt->FetchAll(PDO::FETCH_ASSOC);

		$html .= '<div class="container-fluid">';
		$html .= '<div class="card-columns">';

		foreach($obras as $obra) {

			$valor = 'R$ '.number_format(floatval($obra['valor']), 2, ',', '.');
			$medidas = 'medidas: '.$obra['medida'].' cm';

			$html .= '<div class="card">';
			$html .= '<img class="card-img-top" src="upload/'.$obra['nome_img'].'">';
			$html .= '<div class="card-body text-center">';
			$html .= '<h4 class="card-title">'.$obra['titulo'].'</h4>';
			$html .= '<h6 class="card-subtitle">'.$medidas.'</h6>';
			$html .= '<p>'.$obra['tipo'].'<br>'.$valor.'</p>';
			$html .= '<a href="obra?id='.$obra['id_obra'].'&name='.$obra['titulo_url'].'" class="btn btn-outline-primary btn-block">quero conhecer a obra</a>';
			$html .= '</div>';
			$html .= '</div>';

		}

		$html .= '</div>';
		$html .= '</div>';

		return $html;
	}


	public function cardObraPortfolio() {

		$html = '';

		include '../betolimaOff/conexao.php';

		$query="SELECT * FROM tb_obra";

		$stmt = $conexao->query($query);
		$obras = $stmt->FetchAll(PDO::FETCH_ASSOC);

		$html .= '<div class="container-fluid">';

		foreach($obras as $obra) {

			$valor = 'R$ '.number_format(floatval($obra['valor']), 2, ',', '.');
			$medidas = 'medidas: '.$obra['medida'].' cm';

			$html .= '<div class="card mb-5">';
			$html .= '<img class="card-img-top" src="upload/'.$obra['nome_img'].'" style="border: 3px solid #ccc;">';
			$html .= '<div class="card-body text-center">';
			$html .= '<h4 class="card-title">'.$obra['titulo'].'</h4>';
			$html .= '<h6 class="card-subtitle">'.$medidas.'</h6>';
			$html .= '<p>'.$obra['tipo'].'<br>'.$valor.'</p>';
			$html .= '<a href="obra?id='.$obra['id_obra'].'&name='.$obra['titulo_url'].'" class="btn btn-outline-primary btn-block">quero conhecer a obra</a>';
			$html .= '</div>';
			$html .= '</div>';

		}

		$html .= '</div>';

		return $html;
	}

	public function pagObra() {

		$html = '';

		include '../betolimaOff/conexao.php';

		$query="SELECT * FROM tb_obra";

		$stmt = $conexao->query($query);
		$obras = $stmt->FetchAll(PDO::FETCH_ASSOC);

		foreach($obras as $obra) {
			if($obra['id_obra'] == $_GET['id']) {

				$valor = 'R$ '.number_format(floatval($obra['valor']), 2, ',', '.');
				$medidas = 'medidas: '.$obra['medida'].' cm';

				$html .= '<h1 class="mb-4">'.$obra['titulo'].'</h1>';
				if($obra['status_venda'] == 1) {
					$html .= '<p class="mb-2"><span>'.$obra['tipo'].'</span> - <span>'.$medidas.'</span> - <span>'.$valor.'</span></p>';
				} else {
					$html .= '<p class="mb-2"><span>'.$obra['tipo'].'</span> - <span>'.$medidas.'</span> - <span><strike>'.$valor.'</strike> vendido</span></p>';
				}
				$html .= '<a href="contato">';
				$html .= '<p class="p-3">clique aqui se tiver interesse na tela ou para entrar em contato</p>';
				$html .= '</a>';
				$html .= '<div style="margin-bottom: 70px;">';
				$html .= '<img src="upload/'.$obra['nome_img'].'" class="img-fluid" style="border: 3px solid #ccc;">';
				$html .= '</div>';

			}
		}

		return $html;
	}

}

$obraObj = new Obra();

include '../betolimaOff/conexao.php';

$query="SELECT * FROM tb_obra";

$stmt = $conexao->query($query);
$obras = $stmt->FetchAll(PDO::FETCH_ASSOC);

foreach($obras as $obra) {

	$obraObj = new Obra();

	$obraObj->__set('id_obra', $obra['id_obra']);
	$obraObj->__set('titulo', $obra['titulo']);
	$obraObj->__set('titulo_url', $obra['titulo_url']);
	$obraObj->__set('tipo', $obra['tipo']);
	$obraObj->__set('valor', $obra['valor']);
	$obraObj->__set('medida', $obra['medida']);
	$obraObj->__set('status_venda', $obra['status_venda']);
	$obraObj->__set('status', $obra['status']);
	$obraObj->__set('nome_img', $obra['nome_img']);


}
