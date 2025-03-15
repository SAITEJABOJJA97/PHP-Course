<?php

/**
 *  if(condition1){
 * 
 *    your logic if condition will be true
 *  } elseif( condition2){
 * 
 *   your logic if condition2 will be true
 * 
 * }elsif( con3){
 * 
 *   logic con3
 * }
 *  else {
 * 
 *    code to be execute if all conditions are false
 *  }
 *  
 * 
 */

date_default_timezone_set('Europe/London');

//$time = date("H") ;

//echo date_default_timezone_get();


$time = 21 ;

echo $time  .'</br>';


$matching_time1 = 12;
$matching_time2 = 20;
$matching_time3 = 24;

$user = "parth"; 

/*

if($time < $matching_time1){

    echo "Have a good morning!";
 
}

if($time < $matching_time2){
 
     echo "Have a good day!";
     
 
}

echo "</br>";

if($time < $matching_time3){
 
     echo "Good Night!";

}

*/

/*

if($time < $matching_time1){

    echo "Have a good morning!";
 
}elseif($time < $matching_time2){
 
    echo "Have a good day!";
     
 
}elseif($time < $matching_time3){
 
    echo "Good Night!";
 
 
}else{
 
    echo "Invalid";
 
}
*/

echo '</br>';

/*
if(( is_int($time) AND is_int($matching_time1) AND $time < $matching_time1 )){

    echo "Have a good morning!";
 
 }elseif(( is_int($time) AND is_int($matching_time2) AND $time < $matching_time2 )){
 
     echo "Have a good day!";
     
 
 }elseif(( is_int($time) AND is_int($matching_time3) AND $time < $matching_time3 )){
 
     echo "Good Night!";
     
 
 
 }else{
 
     echo "Invalid";
 
 }
 
*/



if((is_int($time) AND is_int($matching_time1) AND $time < $matching_time1 ) AND $user =="parth"){

   echo "Have a good morning!";

}elseif((is_int($time) AND is_int($matching_time1) AND $time < $matching_time2) AND $user =="parth"){

    echo "Have a good day!";
    

}elseif((is_int($time) AND is_int($matching_time1) AND $time < $matching_time3) AND $user =="parth"){

    echo "Good Night!";
    


}else{

    echo "Invalid";

}






?>