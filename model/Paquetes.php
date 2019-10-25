<?php
class Paquetes {
  function get_Paquete()
  {
    $sentencia = array('Mensaje' => array( array('! Formato de Telefono invalido !'), array('T','0') ));
    return json_encode($sentencia);
  }
}
?>
