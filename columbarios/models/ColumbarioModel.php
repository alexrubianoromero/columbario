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
    public function traerColumnarioId($id)
    {
        $sql = "select * from columbarios where id = '".$id."'";
        $consulta = mysql_query($sql,$this->connectMysql());
        $result = mysql_fetch_assoc($consulta);
        return $result; 
    }
    
    
    
    public function grabarColumbario($request)
    {
        $sql = "insert into columbarios (numero,idPlanta, idPared) 
        values ('".$request['numero']."','".$request['idPlanta']."','".$request['idPared']."'
        
        )";
        $consulta = mysql_query($sql,$this->connectMysql());
        
    }
    
    public function realizarAsignacionClienteAColumbario($request)
    {
        $sql = "update columbarios    
            set  idPropietario = '".$request['idClienteEscogido']."'    
            , idEstado= '2'    
            where id = '".$request['idColumbario']."'   ";
        $consulta = mysql_query($sql,$this->connectMysql());


    }



}

?>