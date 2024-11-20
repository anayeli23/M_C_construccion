<?php 

$_urlBase = "http://mc_construccion.test/";
$host = 'localhost';
$namedb = 'dbconstruccion';
$userdb = 'root';
$passwordb = '';

function get_urlBase($arg1){
    return $GLOBALS['_urlBase'].$arg1;
}

function get_views($arg1){
    return $GLOBALS['_urlBase'].'views/'.$arg1;
}

function get_models($arg1){
    return $GLOBALS['_urlBase'].'models/'.$arg1;
}

function get_controllers($arg1){
    return $GLOBALS['_urlBase'].'controllers/'.$arg1;
}



//echo $_urlBase;
//echo "<br>";
//echo get_urlBase('pagina.html');

?>