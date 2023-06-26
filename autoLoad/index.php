<?php

/**
 * cuando queramos usar otras clases 
 * que estan en otras carpeta debemos incluir
 * los archivos
 * 
 * para hacer la automatizacion de que cuando quiersa usar la clase de un namespace
 * se auto incluya el archivo de la clase
 * 
 * para eso debemos usar una funcion que detecta cada vez que llamamos una clase 
*/

function autoload($clase){
    $ruta_clase = str_replace("\\", "/", $clase) . ".php";
    if (file_exists($ruta_clase)){
        require_once($ruta_clase);
    } 
}
spl_autoload_register('autoload');

use autoload\Controllers\CourseController;
use autoload\Models\Course;
use autoLoad\subcarpeta\subcarpeta\subcarpeta\Conection;


