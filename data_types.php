<?php


define("GREETING","Welcome to IBRAINERS LTD");

define("GREETING_2","Greeting by Parth");


wel_msg();

//define("GREETING_2","Hi urmi!");
//echo "</br>";

//echo "</br>";
echo "</br>========================================</br>";
// string, integer, float/double, boolen(true,false), array and null

$x =  "My name is Parth"; // string


$num = 12; // int

$float =  12.45; // float / double


$flag =  true; // boolen
$flase_flag =  false;// boolen

$num = 15;

echo "num is " . is_float($num) . "</br>";



if(is_float($num)){

    echo "Variable is $num float </br>"; 

}else{

  echo "Variable is not $num float  </br>"; 


}



if(is_float($float)){

  echo "Variable is $float float  </br>"; 

}else{

  echo "$float Variable is not float  </br>"; 


}


//echo "float is " . is_float($float) . "</br>";


$cars =  array("BMW","AUDI","MARUTI","TOYOTA","RENAULT"); //array index array

echo print_r($cars,true);

echo "<pre>".print_r($cars,true)."</pre>";


echo "</br>";

echo "<pre>".print_r($cars[4],true)."</pre>";

echo "size of the cars array : " . sizeof($cars,true) . '</br>';


//5-1 = 4
echo "<pre>".print_r($cars[sizeof($cars,true)-sizeof($cars,true)],true)."</pre>";

//echo '<pre>'.print_r($cars[sizeof($cars,true) - 5 ],true).'</pre>';

foreach($cars as $key=>$value){


  echo '<pre> Car name is '.print_r($value,true).' and car index is '.print_r($key,true).'</pre>';

}


$urmi =  null;
if(is_null($urmi)){

    echo "variable is <b>null</b> as data type";

}else{


    echo "variable is <b>not null</b> as data type";


}


echo "</br>======================== PHP String Function ==========================================</br>";

//echo "my name is krishna</br>";
$name = "my name is Vheejay";
$r_string = "hahS imrU si eman ym";
echo $name.'</br>';

$password = 'home@12345';


$rst =  'saas';


if($rst == strrev($rst)){

  echo 'String and rev string is same';

}else{

  echo 'String and rev string is diff';

}

echo '</br>';

echo "Lengh of the string  ". strlen($name);

echo '</br>';

if(strlen($password) < 10){

  echo 'Invalid lenght please add more than 10 charachters as password';

}else{

  echo 'Password is validated!';

}


echo "</br>";
echo "Lengh of the word  ". str_word_count($name);


echo "</br>";   
echo "Reverse string is " . strrev($name);


echo "</br>";   
echo strpos($name,"moon");

$findstring = "Laxmi";

if(strpos($name,$findstring)){
  
   echo "$findstring is found in the string and the possition is ". strpos($name,$findstring);

}else{

  echo "No match found for $findstring!";
}


echo "</br>";   

if(strpos($name,"Parth")){

    echo strpos($name,"Urmi");
}else{

    echo "Not match found!";

}

echo "</br>";

$fndstr = 'Vheejay';
$rename =  str_replace($fndstr,"Parth",$name);

if($rename!= $name){
   
  echo 'Replace operation is done as ' . $rename;

}else{

  echo "Replace operation not done as no string like $fndstr";
}

//echo $rename;
// strlen, str_word_cout, strrev, strpos, str_replace

echo "</br>======================== PHP Number Function ==========================================</br>";

echo "</br>";

//$cont = pi();

echo (pi());




echo "</br>";

$num = array(-10,-34,-56,-66,0,-28,2,4,5,6,11,7); // indexed array


// -66 -56 -34 -28 -10 0 1 2 3 
echo (min($num));

echo "</br>";

echo (max($num));



echo "</br>";

echo (abs(-43.76790));

echo "</br>";


echo (sqrt(625)); //3 // 9 // 12 as output


echo "</br>";


echo (round(44.49));


echo "</br>========</br></br>========</br>";

echo (rand(1,100));


echo "</br>========</br></br>========</br>";


echo "</br>";

//echo $name;

echo "</br>";
$name = "My is jay";

//echo $name;


// 3rd parameter is for case-insensitive, by default case-insensitive is false

//when case-insensitive is false then we can call case-sensitive is true
//when case-insensitive is true then we can call case-sensitive is false

define("NAME","Vheejay");


define("NAME2","jay");


echo NAME;

echo "</br>";

echo NAME2;
exit;



echo "</br>";




function wel_msg(){

  echo GREETING;
  echo "</br>";
  echo GREETING_2;

}







?>