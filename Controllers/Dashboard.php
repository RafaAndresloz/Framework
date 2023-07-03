<?php 
require_once 'Config/App/Controller.php';
    class Dashboard extends Controller{
        public function index(){
            $this->views->getView($this, 'index');
            //la propiedad $this es una instancia que ya existia dentro de la clase Views, lo que se hace es utilizar el objeto Views
            //para renderizar la vista 'index'
        }
    }

?>