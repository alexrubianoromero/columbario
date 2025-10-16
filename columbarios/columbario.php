<?php
    $ruta = dirname(dirname(__FILE__));
    // echo $ruta;
    require_once($ruta.'/columbarios/controllers/columbarioController.php');
    $controller = new columbarioController();
?>