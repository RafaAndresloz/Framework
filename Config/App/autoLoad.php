<?php 

    spl_autoload_register(function ($class){
        // La función `spl_autoload_register` registra una función que se ejecutará automáticamente cuando se intente cargar una clase que no ha sido definida.
        // Esta función toma como argumento una función anónima que se ejecutará cuando se intente cargar la clase.
        if(file_exists('Config/App'.$class.'.php')){
             // La función `file_exists` verifica si un archivo existe en el sistema de archivos.
            // En este caso, verifica si existe un archivo con el nombre de la clase que se está intentando cargar.
            // Si existe, la condición se cumple y se continúa con el código dentro del bloque `if`.
            require_once 'Config/App/'.$class.'.php';
              // La función `require_once` incluye un archivo en el script actual.
            // En este caso, incluye el archivo correspondiente a la clase que se está intentando cargar.
        }
    });
        // Se cierra la función anónima y se registra en `spl_autoload_register`.
?>