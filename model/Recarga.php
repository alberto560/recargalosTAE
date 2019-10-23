<?php
class Recarga {
  function get_Compania()
  {
    $sentencia1 = array('RECARGA_APP' => array( array('! Formato de Telefono invalido !'), array('T','0') ));
    return json_encode($sentencia1);
  }
  /*{
    $sentencia1 = array('Compania' => array( array('1'), array('ABRIELA FRANCO'), array('NBLANXA'), array('OPERADOR'), array('recargalos')) );
    return json_encode($sentencia1);
  }
  function get_All1(){
    $sentencia1 = array('RECARGA_APP' => array( array('! Formato de Telefono invalido !'), array('T','0') ));
    return json_encode($sentencia1);
  }*/
}
?>
