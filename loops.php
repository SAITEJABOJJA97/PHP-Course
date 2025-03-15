<?php

/**
 * while :  loops through a block of code as long as the specified condition is true
 * 
 * while(condition is true) {
 *  code
 * }
 * 
 * do..while : loops through a block of code once, and then repeats the loop as the specified condition is true
 * 
 * do {
 *  
 * code
 * 
 * } while (condition is true);
 * 
 * for :  loops through a block of code a specified number of times
 * 
 * for( init counter; test counter; increment counter){
 * 
 *    code
 * }
 * 
 * foreach :  loops through a block of code for each element in the array
 * 
 *  foreach($array as $value){
 *   
 *   code
 *   
 *  }
 * 
 *  foreach($array as $key=>$value){
 * 
 *  code
 * 
 * }
 * 
 * 
 */


$while = false;
$do_while = false;
$for =  false;
$foreach = false;


if($while){

  echo "This is  while loop demo <br>"; 
  $num = 8;

  while($num < 11 ){
    
      
    echo "The numner is : $num <br>";

    //$num+=1;
    $num++;

  }

}elseif($do_while){

    echo "This is  do while loop demo <br>";
    
    $num = 7; 
   do{

    echo "The numner is : $num <br>";

      //$num+=1;
      $num++;

   }while ($num <= 10);



}elseif($for){

    echo "This is  for loop demo <br>";

    for($num = 0; $num <= 7 ; $num++){

        echo "The numner is : $num <br>";
    }


}elseif($foreach){

    echo "This is  foreach loop demo <br>";

    $colors =  array("red","green","yellow","pink","black");

    $num =0;

    foreach($colors as $value){
      

     echo "color is : $value </br>";
    //echo "color is : ".$colors[$num]." </br>";

    //$num++;
    }



    echo "</br>For each 2nd sytax </br>";


    $age =  array("jay"=>"28","tinkal"=>"23","roy"=>"34","peter"=>"22");

    /*foreach($age as $key => $value){
        echo "$key age is  $value</br>";

    }*/

    

    foreach($age as $person_name => $person_age){

        echo "$person_name age is  $person_age</br>";

   }
   



}else{

  echo "Invalid Case please check your input for loop!";

}






?>