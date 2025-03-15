<?php

declare(strict_types =0);


/**
 *    fucntion funationname(){
 * 
 *       // logic to be executed;
 * 
 *    }
 * 
 * 
 */


function aboutme(){

     //echo "Hello, My name is Urmi!</br>";
     $num1 =2;
     $num2 =5;

     $total =  $num1 + $num2;

     return $total;


}



$result = aboutme();

echo $result;


echo "</br>";


function myname($fistname,$lastname=null){

   echo 'My name is ' . $fistname. ' '.$lastname .'</br>';


}


myname("Priyanka");
myname("Jay","Brahmbhatt");



function result($name, string $marks= "Not available"){

     //echo "marks: " . $marks;

     if($marks >= 50){
          $result_flag = "pass";

          echo "Result of $name is $result_flag  and marks $marks</br>";
     }
     if($marks < 50){

          $result_flag = "fail";

          echo "Result of $name is $result_flag  and marks $marks</br>";
     }
     if($marks == "Not available"){

         echo "Marsk is not available fot $name!";

     }

    // echo "Result of $name is $result_flag  and marks $marks</br>";

}




result("Jay","77");


echo "</br>";

// call by value
function addNumbers(int $num1, int $num2){

   return $num1 + $num2;

}


$total_1 =  addNumbers(7,12). "</br>";

$total_2 =  addNumbers(17,10). "</br>";

echo $total_1;
echo $total_2;




// call by reference
function age_after_seven($value){


  echo  "It is from function ".$value +=7;
  echo "</br>";

}


$num = 21;

age_after_seven($num);



echo "My age is after 7 years: ". $num;



echo "<br>=============== Array ====================================</br>";

$array = array("Urmi","23","jay","29"); // Indexed array

$age =  array("urmi" => "23", "jay"=> "26");// Assosiative array

$personDetail =  array("name" => "Urmi", "age" => "23","add"=>"UK");

$name_age =  array(
   
        array("name" => "Urmi", "age" => "23","add"=>"UK"),//0
        array("name" => "Jay", "age" => "26","add"=>"IN"),//1
        array("name" => "Akshay", "age" => "24","add"=>"UK"),//2


);

//$name_age - index array
//$name_age[0] - Assosiative array
//$name_age[1] - Assosiative array


$cars_multi_index =  array(

    array("Volvo","abc",19),
    array("BMW","xyz",20),
    array("AUDI","wer",21),
    

);


$cars =  array(

    ("car1")=> array("carname"=>"Volvo","model"=>"abc","Year"=>19),
    ("car2")=> array("carname"=>"BMW","model"=>"cdf","Year"=>20),
    ("car3")=>  array("carname"=>"AUDI","model"=>"xyz","Year"=>21),


);



// 
$data =  array(

       array("cars" =>array(
            array("Maruti","tbz","21"),
            array("Volvo","abc",19),
            array("BMW","xyz",20),
            array("AUDI","wer",21),
       )),
       array("Bikes" => array( 
           array("Pulser","qwe","21"),
           array("BMW","ert",19),
           array("Suzuki","qaz",20),
           array("CT","plm",21),
       ))


);

echo "</br>======================Indexed Array=====================</br>";
echo "<pre>".print_r($array,true)."</pre>";
echo "<pre>".print_r(sizeof($array),true)."</pre>";



echo "======================Assosiative Array=====================</br>";
echo "<pre>".print_r($age,true)."</pre>";


echo "<pre>".print_r($personDetail,true)."</pre>";
echo "<pre>".print_r($personDetail['add'],true)."</pre>";


echo "<pre>".print_r($age['jay'],true)."</pre>";



echo '<br>';
//echo sizeof($array);

echo "<pre>".print_r($name_age,true)."</pre>";

echo "<pre>".print_r($name_age[2]['name'],true)."</pre>";

echo "<pre>".print_r(sizeof($name_age),true)."</pre>";


foreach($name_age as $nameArrayKey=> $nameArray){

    foreach($nameArray as $nameKey=> $nameValue){


        if($nameKey =='name'){

            echo "Person name is ". $nameValue. ', ';


        }elseif($nameKey == 'age'){
       

            echo " age is "  .$nameArray['age']. ' and ';

        }elseif($nameKey =='add'){

            echo "address is ".$nameArray['add'] .'.'; 
        }
    }

    //echo "Person name is ".$nameArray['name']. ", age is "  .$nameArray['age']. " and address is ".$nameArray['add']. " ";
    echo '</br>';



}
exit;






echo "======================Multi Dimentional Array as indexed=====================</br>";
echo "<pre>".print_r($cars_multi_index,true)."</pre>";

echo "<pre>".print_r(sizeof($cars_multi_index),true)."</pre>";

echo "<pre>".print_r($cars_multi_index[1][1],true)."</pre>";



echo "======================Multi Dimentional Array as associative=====================</br>";
echo "<pre>".print_r($cars,true)."</pre>";
echo "<pre>".print_r(sizeof($cars['car1']),true)."</pre>"; 
echo "<pre>".print_r($cars['car3']['model'],true)."</pre>";




echo "======================Data nested array=====================</br>";
echo "<pre>".print_r($data,true)."</pre>";
echo "<pre>".print_r($data[1]['Bikes'][0][1],true)."</pre>";



$cars_index =  array("Volvo","Audi","BMW");
echo "<pre>".print_r($cars_index,true)."</pre>";

sort($cars_index);
echo "<pre>".print_r($cars_index,true)."</pre>";
exit;

?>