<?php

/*

local
global
static


*/

declare(strict_types =0);

$firstname  = "Urmi"; // global scope

$lastname = "Shah";

$fullname = "";


echo "My name is $firstname $lastname";
echo "</br>";
echo "My name is " . $firstname." " .$lastname;
echo "</br>";
echo 'My name is ' .$firstname . ' ' .$lastname;

echo "</br>";
echo "</br>";




$num1 = 25;
$num2 = 36;

echo $num1 + $num2;

function test_a(){

  //global $firstname,$lastname;

//  echo "Function : First name is $firstname  $lastname";

  //$GLOBALS['num1'] = $GLOBALS['num1']+ $GLOBALS['num2'];

  $GLOBALS['fullname'] = $GLOBALS['firstname']." ". $GLOBALS['lastname'];



}

test_a();

echo "</br>";

echo "i am glob " . $GLOBALS['fullname'];
echo "</br>";

echo $firstname;




function test1(){

    $name = "Jay"; //local scope


    static $x = 10;  // static scope and it is also local

    echo $x .'</br>';

    $x++;

    echo "after increment value of x is $x </br>";

    echo "i am inside the test function ". $name;


    return $x;

}

echo "</br>";
test1();

echo "</br>";
echo "i am oustside the test function " . $name ;



echo "</br>";
test1();

echo "</br>";
$final_value= test1();

echo "</br> Final value of static variable is ". $final_value;




function test (string $name , string $email  , int $phone){

    echo "</br> My name is ". $name . '</br>' ;
    echo "My email id is ". $email . '</br>' ;
    echo "My phone  no is ". $phone . '</br>' ;

}


test("Urmi",'u@gmail.com',87138237628);
?>