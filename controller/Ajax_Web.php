<?php
	include_once("../model/ConsultaProcesados.php");
/**
 *
 */
	class ajax_web
	{
	private $model;
		function __construct()
		{
				$this->model = new ConsultaProcesados();
		}
		public function consultar(){
		 $consulta= $this->model->get_Recargas();
	   	 echo $consulta;
		}

		public function consultar_all(){
		 $consulta= $this->model->get_All();
	   	 echo $consulta;
		}
	}
	$consulta_Store= new ajax_web();

	if(!isset($_POST['P'])) {
		print json_encode(0);
		return;
	}

	switch($_POST['P']) {
		case 'OPERADORES_APP':
      		$consulta_Store->consultar();
		break;
		case 'RECARGAS-PR_APP':
      		$consulta_Store->consultar_all();
		break;
	}
?>
