<?php


/*
 trait Traitname {

    // logic
 }

 class m1{
   use Traitname;

 }
*/


trait msg1 {

  public function m1(){
    
    echo "I am trait as m1</br>";

  }

}


trait msg2 {

    public function m2(){
      
      echo "I am trait as m2</br>";
  
    }
  
  }


class Intro {
   
    use msg1;

}

class About{

    use msg1, msg2;
}

$intro1 =  new Intro();

$intro1->m1();


echo "================== =========================== ================</br>";

$about1 = new About();
$about1->m1();
$about1->m2();










?>