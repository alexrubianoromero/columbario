<?php

$raiz = dirname(dirname(dirname(__file__)));

require_once($raiz.'/vista/vista.php');
require_once($raiz.'/clientes/models/ClienteModel.php');

class CLientesVista extends vista
{
    protected $model;
    protected $modelCliente;


    public function __construct()
    {
        $this->modelCliente = new ClienteModel(); 
    }


    public function pantallaInicialClientesNew(){
        $clientes = $this->modelCliente->traerClientes();
        ?>

        <!DOCTYPE html>

         <html lang="en">

         <head>

             <meta charset="UTF-8">

             <meta http-equiv="X-UA-Compatible" content="IE=edge">

             <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
          

             <title>Document</title>

         </head>

         <body class="fondoPrograma">

         <div id="div_clientes" class="container mt-2"  align="center">

             <div  id=" row divBotonesClientes" >

                 <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">

                     <i class="fas fa-search" 
                            onclick="busquedaAvanzada();"  
                            style="font-size:30px;" 
                            data-toggle="modal" data-target="#myModalClientesFiltro" 
                            ></i>
                    
                     <input 
                        type="text" 
                        id="txtBuscarNombre" 
                        placeholder="Nombre" 
                        style="color:black; font-size:20px;" 
                        onkeyup="buscarClientePorNombre();"
                        size = "10px"
                        >

                 <!-- </div>

                 
                 <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-6"> -->
                     
                     <button class="btn btn-primary" onclick="btnNuevoPropietario();"   data-bs-toggle="modal" data-bs-target="#myModalClientes">Nuevo</button>
                </div>
                     
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-6">
                         <!-- <button class="btn btn-primary" onclick="mostrarClientes();">Listar</button> -->
                </div>

             </div>

             <div class="mt-3" align = "center" id="divResultadosClientes">
              <?php $this->verClientes($clientes);    ?>

             </div>

             <?php  $this->modalClientes(); ?>   
             <?php  $this->modalClientesInfo(); ?>   
             <?php  $this->modalClientesHisto(); ?>   
             <?php  $this->modalClientesFiltro(); ?>   

             

         </div>

         </body>

         </html>


     <?php           

    }



    public function modalClientes (){
        ?>
         <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
         Launch demo modal
         </button> -->
       <div class="modal fade" id="myModalClientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Clientes</h1>
                <button onclick = "pantallaClientes();" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="cuerpoModalClientes">
                ...
            </div>
            <div class="modal-footer">
                <button onclick = "verClientesNuevo();"  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
        </div>
        <?php
    }
    public function modalClientes_ante (){
        ?>
         <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
         Launch demo modal
         </button> -->
          <div  class="modal fade " id="myModalClientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header" id="headerNuevoCliente">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Informacion</h4>
                  </div>
                  <div id="cuerpoModalClientes" class="modal-body">
                  </div>
                  <div class="modal-footer" id="footerNuevoCliente">
                      <button type="button" class="btn btn-default" data-dismiss="modal" onclick = "pantallaClientes();">Cerrar</button>
                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
                  </div>
              </div>
          </div>
        <?php
    }





    public function modalClientesInfo (){
        ?>
         <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
         Launch demo modal
         </button> -->
          <div  class="modal fade " id="myModalClientesInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header" id="headerNuevoCliente">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Informacion</h4>
                  </div>
                  <div id="cuerpoModalClientesInfo" class="modal-body">

                  </div>
                  <div class="modal-footer" id="footerNuevoCliente">
                      <button type="button" class="btn btn-default" data-dismiss="modal" onclick="mostrarClientes();">Cerrar</button>
                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
                  </div>
              </div>
          </div>
        <?php
    }
    public function modalClientesHisto (){
        ?>
         <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
         Launch demo modal
         </button> -->
          <div  class="modal fade " id="myModalClientesHisto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header" id="headerNuevoCliente">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Informacion Historial</h4>
                  </div>
                  <div id="cuerpoModalClientesHisto" class="modal-body">

                  </div>
                  <div class="modal-footer" id="footerNuevoCliente">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
                  </div>
              </div>
          </div>
          <script src="../clientes/js/clientes.js"></script>
        <?php
    }
    public function modalClientesFiltro (){
        ?>
         <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
         Launch demo modal
         </button> -->
          <div  class="modal fade " id="myModalClientesFiltro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header" id="headerNuevoCliente">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Filtros de busqueda </h4>
                  </div>
                  <div id="cuerpoModalClientesFiltro" class="modal-body">

                  </div>
                  <div class="modal-footer" id="footerNuevoCliente">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
                  </div>
              </div>
          </div>
          <script src="../clientes/js/clientes.js"></script>
        <?php
    }



    public function verClientes($clientes){
        // echo '<pre>';
        // print_r($clientes);
        // echo '</pre>';
        // if($clientes['filas']>0)
        // {
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>IDENTI</th>
                        <th>NOMBRE</th>
                        <th>TELEFONO</th>
                        <th>ELIMINAR</th>
                        <th>MODIFICAR</th>
                        <!-- <th>DIRECCION</th>
                        <th>EMAIL</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($clientes as $cli){
                            echo '<tr>';
                            echo '<td><button  class ="btn btn-default btn-sm" 
                                                data-toggle="modal" data-target="#myModalClientesInfo" 
                                                onclick ="pantallaBusdqueda('.$cli['idcliente'].');"
                                                size="3px"
                                                >';
                            echo strtoupper($cli['identi']);
                            echo '</button></td>';
                            echo '<td>'.strtoupper($cli['nombre']).'</td>';
                            echo '<td>'.strtoupper($cli['telefono']).'</td>';
                            echo '<td><button 
                                        class="btn btn-primary" 
                                        onclick="eliminarClienteLogico('.$cli['idcliente'].');"
                                        >Eliminar</button></td>';
                            // echo '<td><a href="https://web.whatsapp.com/" target="_blank"><img src="../logos/iconowatsapp.jpg" width="25px"></a></td>';
                            // echo '<td><a href="https://api.whatsapp.com/send?phone=57'.$cli['telefono'].'" target="_blank"><img src="../logos/iconowatsapp.jpg" width="25px">NUevo</a></td>';
                            // echo '<td>'.strtoupper($vehi['direccion']).'</td>';
                            // echo '<td>'.$vehi['email'].'</td>';
                            echo '<td><button 
                                         data-toggle="modal" data-target="#myModalClientesInfo" 
                                          onclick ="formuModificarCLiente('.$cli['idcliente'].');"
                                        class="btn btn-warning">Modificar</button></td>';
                            echo '</tr>';
                        }
                        ?>
                </tbody>
            </table>
            <?php
        // }

    }
    public function verClientesColumbario($clientes){
        // echo '<pre>';
        // print_r($clientes);
        // echo '</pre>';
        // if($clientes['filas']>0)
        // {
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>IDENTI</th>
                        <th>NOMBRE</th>
                        <th>TELEFONO</th>
                    
                        <!-- <th>DIRECCION</th>
                        <th>EMAIL</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($clientes as $cli){
                            echo '<tr>';
                         
                            echo '<td>'.strtoupper($cli['identi']).'</td>';
                            ?>
                            <td><button class="btn btn-primary" 
                            onclick="colocarClienteComoEscogido(<?php echo $cli['idcliente']; ?>,'<?php echo $cli['nombre']; ?>');"><?php echo $cli['nombre']; ?></button></td>
                            <?php
                            echo '<td>'.strtoupper($cli['telefono']).'</td>';
                            echo '</tr>';
                        }
                        ?>
                </tbody>
            </table>
            <?php
        // }

    }



    public function nuevoPropietario(){

        ?>

        <div id="div_pregunte_datos_propietario">

            <div id="infoVerificaciones"></div>
            <div class="row">
                <div class="col-lg-4 mt-2">
                    <label>Identidad</label>
                    <input class="form-control" type="text" id="identi" onchange="validarIdentidad(this.value)">
                </div>
                <div class="col-lg-8  mt-2">
                    <label>Nombre</label>
                    <input class="form-control"  type="text" id="nombre">
                </div>
                <div class="col-lg-4  mt-2">
                    <label>Telefono</label>
                    <input class="form-control" type="text" id="telefono" onchange="validarIdentidad(this.value)">
                </div>
                <div class="col-lg-8  mt-2">
                    <label>Direccion</label>
                    <input class="form-control"  type="text" id="direccion">
                </div>
                <div class=" mt-2">
                    <label>Email</label>
                    <input class="form-control"  type="text" id="email">
                </div>
                <div class=" mt-2">
                    <label>Observaciones</label>
                    <input class="form-control"  type="text" id="observaciones">
                </div>

                <div class=" mt-2">
                     <button onclick="grabarPrpietario();"class="btn btn-primary " ">GRABAR PROPIETARIO</button>
                </div>

            </div>

         

        </div>

        <?php

    }    

    public function nuevoPropietarioDesdeVehiculo(){

        ?>

        <div id="div_pregunte_datos_propietario">

            <div id="infoVerificaciones"></div>

            <table class="table">

                <tr>

                    <td><label>Identidad</label></td>

                    <td> <input type="text" id="identi" onchange="validarIdentidad(this.value)"></td>

                </tr>

                <tr>

                    <td><label>Nombre</label></td>

                    <td> <input type="text" id="nombre"></td>

                </tr>

                <tr>

                    <td><label>Telefono</label></td>

                    <td> <input type="text" id="telefono"></td>

                </tr>

                <tr>

                    <td><label>Direccion</label></td>

                    <td> <input type="text" id="direccion"></td>

                </tr>

                <tr>

                    <td><label>Email</label></td>

                    <td> <input type="text" id="email"></td>

                </tr>

                <tr>

                    <td><label>Observaciones</label></td>

                    <td> <input type="text" id="observaciones"></td>

                </tr>

                <tr>

                    <td colspan="2"> <button onclick="grabarPropietarioDesdeVehiculos();"class="btn btn-primary btn-block btn-lg" ">GRABAR PROPIETARIO</button></td>

                </tr>

            </table>

            </div>

        <?php

    }    


    public function propietarioGrabado(){
        echo '<div class= "avisoGrabado">La informacion del propietario se guardo de forma exitosa</div>';
    }

    public function muestreInfoCliente($infoCLiente,$diagnosticosEbAp)
    {
        // $diagnosticosEbAp =   $this->model->traerDiagnosticoEbApIdcliente($infoCLiente['idcliente']);
        //   echo 'veeeehiculos<pre>';
        //             print_r($infoCLiente);
        //             echo '</pre>';
        //             die();
        ?>
        <div  style="color:black;">
            <div class="row form-group">

                <div class="col-xs-3" align="left">
                    <label for="">Identidad</label>
                </div>
                <div class="col-xs-9" align="left">
                     <?php  echo  $infoCLiente['identi'] ?>
                </div>
            </div>
            <div class="row form-group">
            <div class="col-xs-3" align="left">
                    <label for="">Nombre</label>
                </div>
                <div class="col-xs-9" align="left">
                     <?php  echo  $infoCLiente['nombre'] ?>
                </div>
                </div>
            <div class="row form-group">
            <div class="col-xs-3" align="left">
                    <label for="">Telefono</label>
                </div>
                <div class="col-xs-9" align="left">
                     <?php  echo  $infoCLiente['telefono'] ?>
                </div>
                </div>
            <div class="row form-group">
            <div class="col-xs-3" align="left">
                    <label for="">Email</label>
                </div>
                <div class="col-xs-9" align="left">
                     <?php  echo  $infoCLiente['email'] ?>
                </div>
                </div>
            <div class="row form-group">    
            <div class="col-xs-3" align="left">
                    <label for="">Direccion</label>
                </div>
                <div class="col-xs-9" align="left">
                     <?php  echo  $infoCLiente['direccion'] ?>
                </div>
            </div>
            <div class="row">
                FECHA INICIAL : 
                <input type="date" id="fechain">
                FECHA FINAL: 
                <input type="date" id="fechafin">
                <button class="btn btn-primary" onclick ="filtrarDiagnosticosEbApPorFecha(<?php echo $infoCLiente['idcliente']  ?>);">Filtrar Fechas</button>
            </div>
            <div class="row" id="div_mostrar_info_diagnostico">
                      <?php $this->pintarDiagnosticosCliente($diagnosticosEbAp);  ?>
            </div>

        </div>

        <?php
    }
    
    public function pintarDiagnosticosCliente($diagnosticosEbAp)
    {
       ?>
          <h3>Diagnosticos Agua Potable </h3>
                 <table class="table table-striped">
                    <tr>
                        <th>Numero </th>
                        <th>Fecha</th>
                        <th>Concepto Tecnico</th>
                    </tr>

                     <?php
                    foreach( $diagnosticosEbAp as $diagnostico)
                    {
                         echo '<tr>'; 
                         echo '<td>'.$diagnostico['id'].'</td>'; 
                         echo '<td>'.$diagnostico['fecha'].'</td>'; 
                         echo '<td>'.$diagnostico['conceptoTecnico'].'</td>'; 
                         echo '</tr>';   
                    }
                    ?>
                </table>
       
       <?php
    }
    public function mostrarVehiculosCliente($vehiculos)
    {
            // echo 'vista vehiculos<pre>';
            //   print_r($vehiculos);
            //   echo '</pre>';
            //   die();

            //////////////


            ///////////
        echo '<div style="color:black;">';
        echo '<table class ="table">';
        foreach($vehiculos as $vehiculo)
        {
            $placa = $vehiculo['placa'];
            // echo '<input type = "hidden" value ="'.$placa.'" id="txtplaca">';
            echo '<tr>'; 
            echo '</tr>';
            echo '<td>';
            echo '
            <button 
            data-toggle="modal" data-target="#myModalClientesHisto"
            class ="btn btn-primary"
            onclick = "muestreHistorialVehiculo(\''.$placa.'\');"
            
            >';
            
            // onclick = "muestreHistorialVehiculo('.$placa.');"
            //////////////
            // echo '<td><button  class ="btn btn-default btn-sm" 
            // data-toggle="modal" data-target="#myModalClientesInfo" 
            // onclick ="pantallaBusdqueda('.$cli['idcliente'].');"
            // >';
            // echo strtoupper($cli['identi']);

            ///////////


            echo $placa;
            echo '</button ></td>';


            echo '<td>'.$vehiculo['marca'].'</td>';
            echo '<td>'.$vehiculo['linea'].'</td>';
            echo '<td>'.$vehiculo['color'].'</td>';
            echo '<td>'.$vehiculo['modelo'].'</td>';
        }
        
        echo '</table>';   
        echo '</div>';    
        
        // $this->draw_table($vehiculos);
    }

    public function formuFiltroBusqueda()
    {
        ?>
         <div  style="color:black;">
            <div class="row form-group">

                <div class="col-xs-3" align="left">
                    <label for="">Identificacion:</label>
                </div>
                <div class="col-xs-9" align="left">
                    <input 
                        class="form-control" 
                        type="text"  
                        id="txtBuscarIdenti">
                </div>
            </div>
            <div class="row form-group">

                <div class="col-xs-3" align="left">
                    <label for="">Telefono:</label>
                </div>
                <div class="col-xs-9" align="left">
                    <input class="form-control" type="text"  id="txtBuscarTelefono">
                </div>
            </div>
            <div>
                <button 
                class = "btn btn-primary"
                data-dismiss="modal"
                    onclick="buscarClienteFiltros();">Buscar Filtro</button>
            </div>
          
        </div>
        <?php
    }

    public function mostrarOpcionesCLientesFiltrados($clientes)
    {
        foreach($clientes as $cliente)
        {
            echo '<option value="'.$cliente['idcliente'].'">'.$cliente['nombre'].'</option>';
        }
    }


    public function formuModificarCLiente($idCliente)
    {
        $infoCLiente =   $this->modelCliente->traerClienteId($idCliente);
      ?>
      <div class="row">
           <div class="col-lg-3">
                <label>Identidad</label>
                <input type="text" class="form-control" id ="identidad" value="<?php  echo $infoCLiente['identi'] ?>">
           </div>
           <div class="col-lg-9">
                <label>Nombre</label>
                <input type="text" class="form-control" id ="nombre" value="<?php  echo $infoCLiente['nombre'] ?>">
           </div>
           <div class="col-lg-3">
                <label>Telefono</label>
                <input type="text" class="form-control" id ="telefono" value="<?php  echo $infoCLiente['telefono'] ?>">
           </div>
           <div class="col-lg-9">
                <label>Email</label>
                <input type="text" class="form-control" id ="email" value="<?php  echo $infoCLiente['email'] ?>">
           </div>
           
           <div class="col-lg-9">
                <label>Direccion</label>
                <input type="text" class="form-control" id ="direccion" value="<?php  echo $infoCLiente['direccion'] ?>">
           </div>
            <div>
                <button class="btn btn-primary"onclick="actualizarCliente(<?php   echo $idCliente;  ?>); ">Actualizar</button>
            </div>
      </div>
      
      <?php
    }

}





?>