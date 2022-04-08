<?php 
session_start();




//config file
require_once 'config.php';

require_once 'helper/system_helper.php';


//autoLoader 

function my_autoload($class_name){
    require_once('lib/'.$class_name.'.php');
}

spl_autoload_register('my_autoload');



?>