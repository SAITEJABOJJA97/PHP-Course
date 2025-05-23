<?php
// this is call back function 
function demo_callback($data) {

    //return strlen($data);
    return $data;


}


$sdata = ["apple","banana","pineapple","mengo"];
$qdata = ["audi","duster","bmw","mini"];

$len = array_map("demo_callback",$sdata);
$len2 = array_map( function($data) {

    //return strlen($data);
    return $data;


},$qdata);


echo '<pre>'.print_r($len,true).'</pre>';
echo '<pre>'.print_r($len2,true).'</pre>';

?>