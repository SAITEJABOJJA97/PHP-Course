<?php

/*
$GLOBALS 
$_SERVER
$_REQUEST
$_GET
$_POST
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/


$a = 25;
$b = 56;

function sum(){
   
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    //$z = $GLOBALS['a'] + $GLOBALS['b'];

   // return $z;


}


//$result = sum();

//echo $result;

sum();

echo $c;



echo "<pre>".print_r($_SERVER,true)."</pre>";


echo "<pre>".print_r($_SERVER['SERVER_PORT'],true)."</pre>";

echo "<pre>".print_r($_REQUEST,true)."</pre>";
exit;
?>