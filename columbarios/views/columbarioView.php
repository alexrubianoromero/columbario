<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/columbarios/models/ColumbarioModel.php');
require_once($ruta.'/plantas/views/plantaView.php');
require_once($ruta.'/paredes/views/paredView.php');


class columbarioView  
{
    protected $model;
    protected $plantaView;
    protected $paredView;

    public function __construct()
    {
        $this->model = new ColumbarioModel();
        $this->plantaView = new plantaView();
        $this->paredView = new paredView();
    }

    public function pantallaColumnarios()
    {
        $columbarios =   $this->model->traerColumnarios(); 
                // echo '<pre>';
                // print_r($columbarios);
                // echo '</pre>';
                // die();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <div class="mt-2">
                <button class="btn btn-primary"
                onclick="formuNuevoColumbario();"
                data-bs-toggle="modal" data-bs-target="#modalColumbario123"
                >Nuevo Columnario</button>
            </div>
            <div class="mt-2" id="divMuestreColumbarios">
                <?php  $this->mostrarColumnarios($columbarios); ?>
            </div>
            <?php  $this->modalColumnario();?>
        </body>
        </html>
        <?php
    }

    public function mostrarColumnarios($columbarios)
    {
      echo '<table class="table">'; 
      echo '<tr>';  
      echo '<td>Numero</td>';
      echo '<td>Planta</td>';
      echo '<td>Pared</td>';
      echo '</tr>';
      foreach($columbarios as $columb)
      {
        echo '<tr>';  
        echo '<td>'.$columb['numero'].'</td>';
        echo '<td>'.$columb['idPlanta'].'</td>';
        echo '<td>'.$columb['idPared'].'</td>';
        echo '</tr>';
      }
      echo '</table>';
    }


    public function formuNuevoColumbario()
    {
        
    ?>
        <div class="mt-2 row">
            <div class="col-lg-3">
                <label>Numero</label>
                <input type="text" class="form-control" id="numero">
            </div>
            <div class="col-lg-3">
                <label>Planta</label>
                <?php  $this->plantaView->mostrarPlantas();   ?>
            </div>
            <div class="col-lg-3">
                <label>Pared</label>
                <?php  $this->paredView->mostrarParedes();   ?>
            </div>
            <div class="mt-2">
                <button class="btn btn-primary" onclick="grabarColumbario();">Registrar</button>
            </div>
        </div>
    

    <?php
    }

    public function modalColumnario()
    {
        ?>
        <div class="modal fade" id="modalColumbario123" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Columnarios</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="mpdalBodyColumbario">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="mostrarColumnarios();">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
        </div>
        <?php
    }

}


?>