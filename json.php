<?php

session_start();

echo "<pre>".print_r($_SESSION,true)."</pre>";exit;


// JSON -  JavaScript Object Notation


//json_encode() -  convert an array to json 
//json_decode() -  convert json to an array

$my_info = array("name"=> "Urmi", "surname" => "Shah", "email"=> "urmi@gmail.com","phone"=>"07777224567");//associative array

echo " =====================  Converting An Array to Json =====================";

echo "</br>";
echo "</br>";


echo '<pre>'.print_r($my_info,true).'</pre>';
echo "</br>";
echo "</br>";


$myinfo_json = json_encode($my_info,true);

echo "</br>";



echo $myinfo_json;


echo "</br>";


echo "</br>";


$json_info = '[{"name":"Priyanka","surname":"Sonavane","email":"priyanka@gmail.com","phone":"07777224567"},{"name":"Jay","surname":"patel","email":"jay@gmail.com","phone":"07777224567"},{"name":"Sam","surname":"Will","email":"sam@gmail.com","phone":"07777224567"},{"name":"Maria","surname":"Alen","email":"maria@gmail.com","phone":"07777224567"}]';

/**
 * Multiline json example
 *  [{"name":"Urmi","surname":"Shah","email":"urmi@gmail.com","phone":"07777224567"},{"name":"jay","surname":"Brahmbhatt","email":"urmi@gmail.com","phone":"07777224567"},{"name":"Martin","surname":"asd","email":"urmi@gmail.com","phone":"07777224567"},{"name":"Angel","surname":"prhe","email":"urmi@gmail.com","phone":"07777224567"}]
 */


echo "</br>";


echo " =====================  Converting Json to an Array =====================";

echo "</br>";
echo "</br>";

echo $json_info . '</br>';

echo "</br>";
echo "</br>";

$myinfo_array = json_decode($json_info,true);

// echo print_r($myinfo_array,true);
echo '<pre>'.print_r($myinfo_array,true).'</pre>';




//[{"name":"Nisarg","surname":"Patel","email":"nisarg@gmail.com","phone": "07777224567"}{"name":"Jay","surname":"Brahmbhatt","email":"jay@gmail.com","phone": "07777224787"}]

//{"name":"Nisarg","surname":"Patel","email":"nisarg@gmail.com","phone": "07777224567"}
//{"name":"Nisarg","surname":"Patel","email":"nisarg@gmail.com","phone":"07777224567"}

//[{"name":"Priyanka","surname":"Sonavane","email":"priyanka@gmail.com","phone":"07777224567"},{"name":"Jay","surname":"patel","email":"jay@gmail.com","phone":"07777224567"},{"name":"Sam","surname":"Will","email":"sam@gmail.com","phone":"07777224567"},{"name":"Maria","surname":"Alen","email":"maria@gmail.com","phone":"07777224567"}]
?>