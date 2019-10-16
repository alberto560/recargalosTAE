<?php
	include_once("../model/ConsultaProcesados.php");
/**
 *
 */
	//Estado de cuenta
	class ajax_web1
	{
		private $model;
		function __construct()
		{
			$this->model = new EstadoCuenta();
		}
		public function consultar1(){
			$consulta1=$this->model->get_Locales();
			echo $consulta1;
		}
		public function consultar_all1(){
			$consulta1=$this->model->get_All1();
			echo $consulta1;
		}
    //intento de mas
      //bolsas
    public function consultar2(){
      $consulta2=$this->model->get_Bolsas();
      echo $consulta2;
    }
    public function consultar_all2(){
      $consulta2=$this->model->get_All2();
      echo $consulta2;
    }
      //cuentas
    public function consultar3(){
      $consulta3=$this->model->get_Cuentas();
      echo $consulta3;
    }
    public function consultar_all3(){
      $consulta3=$this->model->get_All3();
      echo $consulta3;
    }
    //fin
	}

  /*class ajax_web2
  {
    private $model;
    function __construct()
    {
      $this->model = new EstadoCuenta2();
    }

  }

  class ajax_web3
	{
		private $model;
		function __construct()
		{
			$this->model = new EstadoCuenta3();
		}

	}*/

	$consulta_Store1 = new ajax_web1();
	//$consulta_Store2 = new ajax_web2();
	//$consulta_Store3 = new ajax_web3();
	//Fin de estado de cuenta

	if(!isset($_POST['P'])) {
		print json_encode(0);
		return;
	}

	switch ($_POST['P']) {
		case 'ESTADOCTA_APP':
					$consulta_Store1->consultar1();
		break;
		case 'ESTADOCTA_APP_New':
					$consulta_Store1->consultar_all1();
		break;
    //2
    case 'ESTADOCTA_APP':
					$consulta_Store1->consultar2();
		break;
		case 'ESTADOCTA_APP_New':
					$consulta_Store1->consultar_all2();
		break;
    //3
    case 'ESTADOCTA_APP':
					$consulta_Store1->consultar3();
		break;
		case 'ESTADOCTA_APP_New':
					$consulta_Store1->consultar_all3();
		break;
	}
?>
