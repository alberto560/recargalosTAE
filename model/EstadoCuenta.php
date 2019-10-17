<?php
  //PARTE DE LA VISTA DE ESTADO DE CUENTA
  //Local
  class EstadoCuenta {
    function get_Locales()
    {
      $sentencia1 = array('Locales' => array( array('Mi Estado De Cuenta'), array('GABRIELA FRANCO'), array('NBLANXA'), array('OPERADOR'), array('recargalos')) );
      return json_encode($sentencia1);
    }
    function get_All1(){
      $sentencia1 = array('TB_Estado' => array( array('0','NO SE ENCONTRARON REGISTROS EN ESTA FECHA'), array('T','0') ));
      return json_encode($sentencia1);
    }
  }

  //Bolsas
  /*class EstadoCuenta2 {
    function get_Bolsas()
    {
      $sentencia2 = array( 'Bolsas' => array( array('Bolsa TAE')) );
      return json_encode($sentencia2);
    }
    function get_All2(){
      $sentencia2 = array('TB_Estado' => array( array('0','NO SE ENCONTRARON REGISTROS EN ESTA FECHA'), array('T','0') ));
      return json_encode($sentencia2);
    }
  }*/

  //Cuenta
  /*class EstadoCuenta3 {
    function get_Cuentas()
    {
      $sentencia3 = array( 'Cuentas' => array( array('TOD O'), array('ABONOS'), array('RECARGAS')) );
      return json_encode($sentencia3);
    }
    function get_All3(){
      $sentencia3 = array('TB_Estado' => array( array('0','NO SE ENCONTRARON REGISTROS EN ESTA FECHA'), array('T','0') ));
      return json_encode($sentencia3);
    }
  }*/
  //FIN DE LA PARTE DE LA VISTA DE ESTADO DE CUENTA
 ?>
