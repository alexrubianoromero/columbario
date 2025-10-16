<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/estados/models/EstadoModel.php');


class estadoView  
{
    protected $model;

    public function __construct()
    {
        $this->model = new EstadoModel();
    }

    public function mostrarEstados()
    {
        $estados =  $this->model->traerEstados();
        echo '<select class="form-control" id="idPlanta" >';
        echo '<option value="">Seleccione...</option>';
        foreach($estados as $estado)
        {
            echo '<option value="'.$estado['id'].'">'.$estado['descripcion'].'</option>';
        }
        echo '</select>';
    }
    public function mostrarEstadosSelectedIdEstado($idEstado)
    {
        $estados =  $this->model->traerEstados();
        echo '<select class="form-control" id="idPlanta" >';
        // echo '<option value="">Seleccione...</option>';
        foreach($estados as $estado)
        {
            if(  $estado['id']== $idEstado)
            {    echo '<option selected value="'.$estado['id'].'">'.$estado['descripcion'].'</option>'; }
            else{ echo '<option value="'.$estado['id'].'">'.$estado['descripcion'].'</option>';}
        }
        echo '</select>';
    }

}