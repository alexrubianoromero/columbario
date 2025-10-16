<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/plantas/models/PlantaModel.php');


class plantaView  
{
    protected $model;

    public function __construct()
    {
        $this->model = new PlantaModel();
    }

    public function mostrarPlantas()
    {
        $plantas =  $this->model->traerPlantas();
        echo '<select class="form-control" id="idPlanta" >';
        echo '<option value="">Seleccione...</option>';
        foreach($plantas as $planta)
        {
            echo '<option value="'.$planta['id'].'">'.$planta['planta'].'</option>';
        }
        echo '</select>';
    }
    public function mostrarPlantasSeleccionIdPlanta($idPlanta)
    {
        $plantas =  $this->model->traerPlantas();
        echo '<select class="form-control" id="idPlanta" >';
        // echo '<option value="">Seleccione...</option>';
        foreach($plantas as $planta)
        {
            if($planta['id'] ==  $idPlanta)
            {
                echo '<option selected value="'.$planta['id'].'">'.$planta['planta'].'</option>';

            }else { echo '<option value="'.$planta['id'].'">'.$planta['planta'].'</option>'; }
            
        }
        echo '</select>';
    }



}