<?php


//preg_match()   :  returns 1 if match or return 0 if not matching 
//preg_match_all() : returns 0 or 1  as well and match number and string both
//preg_replace :  Return string because it is matching word with string and replacing it

$str= "My name is jay and jay  jay is going job";
$pattern = "/joy/i";

//i make pattern case insensitive; // khotu na lage
//m multiple search from start to end
//u enable matching for UTF-8 encoded patterns
//[abc]  
//[^abc] 
//[0-9] 
// \s 

echo preg_match($pattern,$str);


// 1
echo "</br>";

echo preg_match_all($pattern,$str);


echo "</br>";

echo preg_replace($pattern,"Urmi",$str);


echo "</br>";


$str2 = "jApples and badanana.";
$pattern2 = "/da(na){2}.$/i";
$pattern3 = "/^App/i";


//^ starting 
//$ ending

echo preg_match($pattern2,$str2);

echo "</br>";


echo preg_match($pattern3,$str2);

echo "</br>";


$name =  "Urmi Shah";
$ptrn = "/urmi/i";
echo preg_match($ptrn,$name);

echo "</br>";


$fruit = "Apple banana banana and banana  banana.";

$ptrn2 = "/ba(na){2}/i";
$ptrn3 = "/^A(p){2}/";


echo "</br>";
echo preg_match_all($ptrn2, $fruit);
echo "</br>";
echo preg_match_all($ptrn3, $fruit);


echo "</br>";

$stmt1 = "i am Student";

$ptrn3_1 ="/student/i";

echo preg_replace($ptrn3_1,'Developer',$stmt1);


echo "</br>";


$stmt2 =  "Jay Jay jay jay is student and he is in UK UK UK UK";

$ptrn4 = "/^jay/i"; // starting with jay
$ptrn5 = "/uk$/i"; // ending with uk

echo "</br> Starting with such pattern find : ";

echo preg_match_all($ptrn4,$stmt2);


echo "</br>  Ending with such pattern : ";

echo preg_match_all($ptrn5,$stmt2);


$que1_str = "I am computer engineer engineer";

$q1_ptrn1 = "/Computer/";

$q1_ptrn2 = "/n(e){2}/";

$q1_ptrn3 = "/p(ute)/i";

$q1_ptrn4 = "/er$/i";



echo "</br>";

echo preg_match_all($q1_ptrn4,$que1_str);



?>