<?php


require_once 'php/functions.php';
spl_autoload_register(function($class)

{

    require_once $_SERVER['DOCUMENT_ROOT'].'/todolist/backend/class/'.$class.'.php';


});




?>