<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta);
require_once($ruta.'/columbarios/views/columbarioView.php');
require_once($ruta.'/columbarios/models/ColumbarioModel.php');

class columbarioController
{
    protected $view;
      protected $model;


    public function __construct()
    {
        $this->view = new columbarioView();
        $this->model = new ColumbarioModel();

        if($_REQUEST['opcion']=='pantallaColumbarios')
        {
            $this->view->pantallaColumnarios();

        }
        if($_REQUEST['opcion']=='formuNuevoColumbario')
        {
            $this->view->formuNuevoColumbario();

        }
        if($_REQUEST['opcion']=='mostrarColumnarios')
        {
             $columbarios =   $this->model->traerColumnarios(); 
            $this->view->mostrarColumnarios($columbarios);

        }
        if($_REQUEST['opcion']=='verInfoColumbario')
        {
            $this->view->verInfoColumbario($_REQUEST['idColumbario']);

        }
        if($_REQUEST['opcion']=='grabarColumbario')
        {
            $this->model->grabarColumbario($_REQUEST);
            echo 'Registrado';

        }



    }



}

?>