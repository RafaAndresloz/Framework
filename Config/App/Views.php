<?php 

class Views {
    public function getView($controller, $view, $data = ''){
         // Se define un método público llamado "getView" que toma tres parámetros: el controlador, la vista y los datos.
        $controlador = get_class($controller);
                // Se crea una variable llamada "controlador" que contiene el nombre de la clase del controlador.
        if($controlador== 'Home'){
             // Se verifica si el controlador es "Home".
            $view = 'Views/Templates/'.$view.'.php';
            // Si el controlador es "Home", se crea una variable "view" que contiene la ruta de la vista.
        }else{
            $view = 'Views/Templates/'.$controlador. '/'.$view.'.php';
            // Si el controlador no es "Home", se crea una variable "view" que contiene la ruta de la vista para ese controlador específico.
        }
        require $view;
        // Se incluye el archivo de la vista especificada.
    }
}
?>