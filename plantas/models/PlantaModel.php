<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/conexion/Conexion.php');

class PlantaModel extends Conexion
{
    public function traerPlantas()
    {
        $sql = "select * from plantas";
        $consulta = mysql_query($sql,$this->connectMysql());
         $result = $this->get_table_assoc($consulta);
        return $result; 
    }
}

?>