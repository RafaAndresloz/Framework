<?php 
    $ruta = !empty($_GET['url']) ? $_GET['url']: "Home/index";
        // Se crea una variable llamada "ruta" que contiene la URL solicitada. 
        //Si no hay ninguna URL solicitada, se establece por defecto "Home/index".
    $array = explode("/", $ruta);
        // Se crea una matriz llamada "array" que contiene los elementos de la URL separados por "/".
    $controller = $array[0];
        // Se crea una variable llamada "controller" que contiene el primer elemento de "array".

    $metodo = "index";
        // Se crea una variable llamada "metodo" con el valor predeterminado "index".

    $param = "";
        // Se crea una variable llamada "param" con un valor inicial vacío.
    if (!empty($array[1])){
        if(!empty($array[1]) != ''){
            $metodo = $array[1];
            // Si existe un segundo elemento en "array", se asigna a "metodo".
        }
    }
    if(!empty($array[2])){
        if(!empty($array[2]) != ''){
            for($i=2;$i<count($array);$i++){
                $param .= $array[$i] . ",";
            }
            $param = trim($param, ",");
            // Si hay un tercer elemento en "array", se crea una cadena de parámetros separados por comas.
        }
    }

    require_once 'Config/App/autoLoad.php';

    $dirController = "Controllers/".$controller.".php";
        // Se crea una variable llamada "dirController" que contiene la ruta del controlador.
    if(file_exists($dirController)){
        // Si el archivo del controlador existe
        require_once $dirController;
          // Se incluye el archivo del controlador.
        $controller = new $controller();
        // Se crea una nueva instancia del controlador.
        if(method_exists($controller, $metodo)){
            // Si el método especificado existe en el controlador
            $controller -> $metodo($param);
            // Se llama al método especificado con los parámetros especificados.
        }else{
            echo "no existe el metodo solicitado";
            // Si el método especificado no existe en el controlador, se muestra un mensaje de error.
        }
    }else{
        echo "no exite el controlador solicitado";
        // Si el archivo del controlador no existe, se muestra un mensaje de error.
    }
?>