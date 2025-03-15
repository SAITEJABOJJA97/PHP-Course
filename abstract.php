<?php

//abstract syntax
 abstract class ParentClass{ 

    abstract public function M1();
  
    abstract public function M2($par1,$par2);

    abstract public function M3() : string;


 }


 //parent class

 abstract class Car {

  public $name;
  public $color;
  public function __construct($name,$color){

    $this->name = $name;
    $this->color = $color;

  }

  abstract protected function overview($color) : string;


 }




 class Audi extends Car{

    function overview($color) : string {

      return "Product name is ". $this->name  . " " .$this->color  . ". I am german product.";


   }

 }

 class BMW extends Car{

    // you can define more than parent class function para but you have to mendetory declare or pass equals para as you have in your parent class function and it should be optional.
   public function overview($color,$doors=null) : string {

    return "Product name is ". $this->name . " " .$this->color ." with " .$doors. " doors"  . ". My price is £45000";

   }

   public function test() : string{


     return "BMW test ".  $this->name;

   }


 }



 $audi =  new audi("Audi","Black");
 echo $audi->overview($audi->color);
 echo "</br>";



 $bmw =  new BMW("BMW","White");
 echo $bmw->overview($bmw->color,"4");

 echo "</br>";

 echo $bmw->test();


?>