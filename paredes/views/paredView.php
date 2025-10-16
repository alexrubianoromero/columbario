<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/paredes/models/ParedModel.php');


class paredView  
{
    protected $model;

    public function __construct()
    {
        $this->model = new ParedModel();
    }

    public function mostrarParedes()
    {
        $paredes =  $this->model->traerParedes();
        echo '<select class="form-control" id="idPared" >';
        echo '<option value="">Seleccione...</option>';
        foreach($paredes as $pared)
        {
            echo '<option value="'.$pared['id'].'">'.$pared['pared'].'</option>';
        }
        echo '</select>';
    }
    public function mostrarParedesSelectIdPared($idPared)
    {
        $paredes =  $this->model->traerParedes();
        echo '<select class="form-control" id="idPared" >';
        // echo '<option value="">Seleccione...</option>';
        foreach($paredes as $pared)
        {
              if($pared['id'] ==  $idPared)
            {
                echo '<option selected value="'.$pared['id'].'">'.$pared['pared'].'</option>';
            }else { echo '<option value="'.$pared['id'].'">'.$pared['pared'].'</option>'; }
            
        }
        echo '</select>';
    }

}