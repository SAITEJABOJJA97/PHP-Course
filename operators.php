<?php

/* Arithmetic Operators

+ 
-
*
/
%
**

*/

$num1 = 10;
$num2 = 12;

echo "Addition <br>";
echo $num1 + $num2 . '</br>';



echo "Sub <br>";
echo $num2 - $num1 . '</br>';





echo "Mul <br>";
echo $num1 * $num2 . '</br>';





echo "Div <br>";
echo $num2/$num1 . '</br>';





echo "Modulus <br>";
echo $num2%$num1 . '</br>';




$num3 = 2;
$num4 = 4;


echo "Exponentiation <br>";
echo $num3**$num4 . '</br>';



/* Assignment operators

   x=y
   x+=y
   x-=y
   x*=y
   x/=y
   x%=y

*/


$x = 12;
//$x +=100; // 12 + 100 = 112
//$x -=2; // 12-2 =10
//$x *= 2; // 12*2= 24
//$x /= 2; // 12/2= 6
//$x %= 5; // 12%5= 2


echo $x;



/* Comparison operators

   x==y // equal
   x===y //identical
   x!=y // not equal
   x<>y // Not equal
   x!==y // Not identical
   x<y
   x>y
   x<=y
   x>=y
   x<=>y


*/

echo  "</br> ================== Comparison operatiors ===================</br>";

$a=11;
$b=10;
echo "</br> equals check: ";
var_dump($a==$b);



echo "</br> Indentical check: ";
var_dump($a===$b);



echo "</br>not equals check: ";
var_dump($a!=$b);



echo "</br> Greater than check: ";
var_dump($a>$b); 


echo "</br> Less than check: ";
var_dump($a<$b); 


echo "</br>  spaceship ";




echo "</br>spaceship ";
$x= 9;
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y




//var_dump($x<=>$y); //spaceship
echo "</br>  spaceship ";
$x= 10;
$y = 10;

echo ($x <=> $y); // returns 0 because $x is equal to $y
echo "</br>";





$x= 15;
$y = 10;

//var_dump($x<=>$y); //spaceship
echo "</br>  spaceship ";

echo ($x <=> $y); // returns +1 because $x is greater than to $y

exit;






?>


