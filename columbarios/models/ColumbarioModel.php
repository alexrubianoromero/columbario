<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/conexion/Conexion.php');

class ColumbarioModel extends Conexion
{
    public function traerColumnarios()
    {
        $sql = "select * from columbarios order by id desc";
        $consulta = mysql_query($sql,$this->connectMysql());
         $result = $this->get_table_assoc($consulta);
        return $result; 
    }
    public function grabarColumbario($request)
    {
        $sql = "insert into columbarios (numero,idPlanta, idPared) 
        values ('".$request['numero']."','".$request['idPlanta']."','".$request['idPared']."'
        
        )";
        $consulta = mysql_query($sql,$this->connectMysql());
   
    }



}

?>