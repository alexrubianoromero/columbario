<?php

$raiz = dirname(dirname(dirname(__file__)));
// die($raiz); 
require_once($raiz.'/conexion/Conexion.php');

class ClienteModel extends Conexion
{

    public function traerClientes()
    {
        $sql = "select * from cliente0  where anulado = '0'  order by idcliente desc";
        $consulta = mysql_query($sql,$this->connectMysql());
        $clientes = $this->get_table_assoc($consulta);
        return $clientes;   
    }
    public function traerClienteId($idCliente)
    {
        $sql = "select * from cliente0  where idcliente = '".$idCliente."' ";
        $consulta = mysql_query($sql,$this->connectMysql());
        $cliente = mysql_fetch_assoc($consulta);
        return $cliente;   
    }
    
    public function actualizarCiente($request)
    {
        $sql = "update cliente0 set 
        identi = '".$request['identidad']."' 
        ,nombre = '".$request['nombre']."' 
        ,telefono = '".$request['telefono']."' 
        ,email = '".$request['email']."' 
        ,direccion = '".$request['direccion']."' 
        where idcliente = '".$request['idCliente']."'   ";
        $consulta = mysql_query($sql,$this->connectMysql());
    }

    public function grabarPropietario($request){

            //   $existeIdentidad = $this->validarPropietario($request['identi']);
              $sql = "INSERT INTO cliente0 (identi,nombre,telefono,direccion,observaci,email) 
                      VALUES('".$request['identi']."','".strtoupper($request['nombre'])."',
                      '".$request['telefono']."','".$request['direccion']."','".$request['observaciones']."'
                      ,'".$request['email']."'
                      )";
            //   echo $sql;
            //   die();        
               $consulta = mysql_query($sql,$this->connectMysql());  
              $maxId = $this->traerMaxIdCLiente0();
            //   $this->grabar_correo_propietario($conexion,$maxId,$request['email']);
              return $maxId;   
          }


           public function validarPropietario($identi){

              $sql = "SELECT * FROM cliente0 WHERE identi = '".$identi."'   ";

                $consulta = mysql_query($sql,$this->connectMysql());

              $filas = mysql_num_rows($consulta);

            //   $arregloRespuesta = mysql_fetch_assoc($consulta);

            //   $respu['filas']=$filas;

            //   $respu['info'] = $arregloRespuesta;

            //   echo '<pre>'; 

            //   print_r($respu);

            //   echo '</pre>';

            //   die();

              return $filas;

          }


           public function traerMaxIdCLiente0(){
              $sql = "SELECT MAX(idcliente)as maxId FROM cliente0 "; 
              // echo  '<br>'.$sqlId;
              // die();
                $consulta = mysql_query($sql,$this->connectMysql());
              $consultaId = mysql_fetch_assoc($consulta);
              return $consultaId['maxId'];
          } 



    public function buscarClientePorNombre($nombre){
      $sql="select * from cliente0 where nombre like '%".$nombre."%'  "; 
              // echo '<br>'.$sql;
              // die();
      $consulta = mysql_query($sql,$this->connectMysql()); 
      $filas = mysql_num_rows($consulta);
      $datos = $this->get_table_assoc($consulta);
    //   $respuesta['filas']= $filas;
    //   $respuesta['datos']=  $datos;  
      return $datos; 
  }


}