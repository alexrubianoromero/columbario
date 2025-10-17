<?php

$raiz = dirname(dirname(dirname(__file__)));

require_once($raiz.'/clientes/models/ClienteModel.php');
require_once($raiz.'/clientes/vista/ClientesVista.php');
// die('controlador '.$raiz);


class ClientesControlador
{
    private $vista;
    protected $modelCliente;


    public function __construct()
    {
        $this->vista = new ClientesVista();
         $this->modelCliente = new ClienteModel(); 
        // $this->modelCar = new VehiculosModelo();

        if($_REQUEST['opcion']=='pantallaInicialClientesNew')
        {
            $this->vista->pantallaInicialClientesNew();
        }
        if($_REQUEST['opcion']=='verClientesNuevo')
        {
            $clientes =  $this->modelCliente->traerClientes();
            $this->vista->verClientes($clientes);
        }
          
        if($_REQUEST['opcion']=='nuevoPropietario'){
              $this->nuevoPropietario();
        }  
        
            
        //     if($_REQUEST['opcion']=='nuevoPropietarioDesdeVehiculo'){
                
        //         $this->nuevoPropietarioDesdeVehiculo($this->conexion);
                
        //     }  
            
            if($_REQUEST['opcion']=='grabarPropietario'){
                
                //     echo '<pre>';
                
                // print_r($_REQUEST);
                
                // echo '</pre>';
                
                // die();
                
                $this->grabarPropietario($_REQUEST);
                
            }
            
        //     if($_REQUEST['opcion']=='validarIdenti'){
                
        //         $this->validarIdenti($this->conexion,$_REQUEST['identi']);
                
        //     }   
            
        //     if($_REQUEST['opcion']=='cargarUltimoPropietario'){
                
        //         $this->cargarUltimoPropietario($conexion);
                
        //     }
        //     if($_REQUEST['opcion']=='buscarClientePorId'){
        //         $this->buscarClientePorId($_REQUEST);
        //     }
            
            if($_REQUEST['opcion']=='buscarClientePorNombre'){
                $this->buscarClientePorNombre($_REQUEST);
            }
            if($_REQUEST['opcion']=='buscarClientePorNombreAsignarColumbario'){
                $this->buscarClientePorNombreAsignarColumbario($_REQUEST);
            }
        //     if($_REQUEST['opcion']=='formuFiltroBusqueda'){
        //         $this->formuFiltroBusqueda();
        //     }
        //     if($_REQUEST['opcion']=='buscarPorFiltros'){
        //         $this->buscarPorFiltros($_REQUEST);
        //     }
        //     if($_REQUEST['opcion']=='filtrarPropietariosNombre'){
        //         $this->filtrarPropietariosNombre($_REQUEST);
        //     }
        //     if($_REQUEST['opcion']=='eliminarClienteLogico'){
        //         $this->modelo->eliminarClienteLogico($_REQUEST['idCliente']);
        //     }
        //     if($_REQUEST['opcion']=='formuModificarCLiente'){
        //         $this->vista->formuModificarCLiente($_REQUEST['idCliente']);
        //     }
        //     if($_REQUEST['opcion']=='actualizarCiente'){
        //          $this->modelCliente->actualizarCiente($_REQUEST);
        //          echo 'Cliente Actaulizado';
        //     }


            
        }
        
    public function verClientes(){
        $clientes = $this->modelCliente->traerClientes();
        $this->vista->pantallaInicialClientesNew($clientes);
    }
    
    function buscarClientePorNombre($request)
    {
        $clientes = $this->modelCliente->buscarClientePorNombre($request['nombre']);
        $this->vista->verClientes($clientes);
    }
    
    function buscarClientePorNombreAsignarColumbario($request)
    {
        $clientes = $this->modelCliente->buscarClientePorNombre($request['nombre']);
        $this->vista->verClientesColumbario($clientes);
    }
    
        
    // public function pantallainicialClientes($conexion){
    //     $clientes = $this->modelo->traerDatosCliente0Activos($conexion);
    //     $this->vista->pantallaInicialClientesNew($clientes);
    // }

   
    public function nuevoPropietario(){
        
        $this->vista->nuevoPropietario();
        
    }
    
    // public function nuevoPropietarioDesdeVehiculo(){
        
    //     $this->vista->nuevoPropietarioDesdeVehiculo();
        
    // }
    
    
    
    public function grabarPropietario($request){

         $this->modelCliente->grabarPropietario($request);
         echo 'Almacenado exitosamente';
        // $this->vista->propietarioGrabado();
        
    }
    
    
    
    
    
    // public function cargarUltimoPropietario($conexion){
        
    //     $maxId = $this->modelo->traerMaxIdCLiente0($conexion);
        
    //     funciones::select_general_condicion('cliente0',$conexion,'idcliente','nombre' , $maxId);
        
    // }
    
    
    
    // public function validarIdenti($conexion,$identi){
        
    //     $validacion = $this->modelo->validarPropietario($conexion,$identi);
        
    //     if($validacion >0){
            
    //         echo '<p class="alerta1">Esta identidad ya existe en la base de datos</p> ';
            
    //     }
        
    // }
    
    
    // public function buscarClientePorId($request)
    // {
    //     $infoCLiente = $this->modelo->traerDatosClienteIdNew($request['idCliente']);
        
    //     //voya a hacerla desde clientes haber
        
        
    //     // $vehiculos = $this->modelCar->traerVehiculosCliente($request['idCliente']);
        
    //     // echo 'veeeehiculos<pre>';
    //     //             print_r($vehiculos);
    //     //             echo '</pre>';
    //     //             die();
    //     $diagnosticosEbAp =   $this->modelo->traerDiagnosticoEbApIdcliente($infoCLiente['idcliente']);
    //     $this->vista->muestreInfoCliente($infoCLiente,$diagnosticosEbAp);        
        
    // }
    
    
 
    // public function formuFiltroBusqueda()
    // {
    //     $this->vista->formuFiltroBusqueda();
        
    // }
    
    // public function buscarPorFiltros($request)
    // {
    //                 //   echo 'veeeehiculos<pre>';
    //                 // print_r($request);
    //                 // echo '</pre>';
    //                 // die();
    //     $clientes = $this->modelo->buscarClientePorFiltros($request);
    //     $this->vista->verClientes($clientes);
        
    // }
    // public function filtrarPropietariosNombre($request)
    // {
    //     $clientesFiltrados = $this->modelo->filtrarPropietariosNombre($request['nombreCliente']);
    //     $this->vista->mostrarOpcionesCLientesFiltrados($clientesFiltrados);
    // }
    
}



?>