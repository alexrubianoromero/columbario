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
    public function traerPlantaId($idPlanta)
    {
        $sql = "select * from plantas where id = '".$idPlanta."'   ";
        $consulta = mysql_query($sql,$this->connectMysql());
         $result = mysql_fetch_assoc($consulta);
        return $result; 
    }
}

?>