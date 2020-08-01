<?php
//creo i collegamenti per il successivo refactoring

defined('DS')?null:define('DS',DIRECTORY_SEPARATOR);
defined('FRONT_END')?null:define('FRONT_END',__DIR__.DS.'/templates/front');
defined('BACK_END')?null:define('BACK_END',__DIR__.DS.'/templates/back');
// defined('FRONT_END')?null:define('FRONT_END',__DIR__.'/templates/front');
// defined('BACK_END')?null:define('BACK_END',__DIR__.'/templates/back');
// echo FRONT_END;

//configuro database

define('DB_HOST','localhost');
define('DB_UTENTE','root');
define('DB_PASSWORD','root');
define('DB_NAME','E-commerce');

$connection = mysqli_connect(DB_HOST,DB_UTENTE,DB_PASSWORD,DB_NAME);

//test per sapere se tutto va bene 

if(!$connection){
    echo 'non sei connesso';
}

//andiamo su public->index per i collegamenti

//richiamiamo le funzioni
require_once('function.php');        

?>