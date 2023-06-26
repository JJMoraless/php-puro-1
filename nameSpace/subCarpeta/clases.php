<?php 

use Carpeta1\Humano;
use Carpeta2\Humano as Human;

require_once "carpeta1/Humano.php";
require_once "carpeta2/Humano.php";

$persona = new Humano();
$persona2 = new Human();

$persona->saludar();






