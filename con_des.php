<?php

// DRY : DON'T REPEAT YOURSELF

class Fruit{

  // logics & functions  

  //Properties

  public $name;
  public $color;
  public $quantity;


  //Methods

  function __construct($name,$color,$quantity){
   
    $this->name = $name;
    $this->color = $color;
    $this->quantity = $quantity;

    //echo "<pre>".print_r($this,true)."</pre>";
    
    echo "Class atrributes are set for $this->name !</br>";

  }
  


  function __destruct(){

    echo "===================================</br>";

    echo "Fruit name is " . $this->name. "</br>";
    echo "Fruit color is " . $this->color. "</br>";
    echo "Fruit quantity is " . $this->quantity. "</br>";

    echo "I am destrcutor of $this->name </br>";

  }


}

class Animal{



}


$banana = new Fruit("Banana","Yellow","24"); // Banana is object of fruit class



echo "===================================</br>";

$mengo = new Fruit("Mengo","Green","21"); // Mengo is object of frut class

echo "===================================</br>";


$apple = new Fruit("Apple","Red","12"); // Apple is object of fruit class

exit;


?>