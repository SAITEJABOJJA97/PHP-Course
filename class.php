<?php

// DRY : DON'T REPEAT YOURSELF

class Fruit{

  // logics & functions  

  //Properties
  public $name;
  public $color;
  public $quantity;
  public $profit;

  //Methods
  

  function set_fruit($name,$color,$quantity){

    $this->name = $name;
    $this->color = $color;
    $this->quantity = $quantity;

  }

  function get_fruit(){

    //echo "<pre>".print_r($this,true)."</pre>";
    
    echo "Fruit name is " . $this->name. "</br>";

    echo "Fruit color is " . $this->color. "</br>";

    echo "Fruit quantity is " . $this->quantity. "</br>";


  }


  function profit($totalsell,$spend){


    $this->profit =  $totalsell- $spend;

    //return 'Net profit is '.$this->profit . ' for '. $this->name;
    return $this->profit;
    




  }

}

class Animal{



}



$apple = new Fruit(); // Apple is object of fruit class

//if($apple instanceof Fruit){

  $apple->set_fruit("Apple","Red","12");
  $apple->get_fruit();

  $netProfitApple = $apple->profit(2450,1200);

  echo $netProfitApple;





//}else{


  //  echo "Apple is not a instance of Fruit class!</br>";
//}


echo "<br/>===================================</br>";

$banana = new Fruit(); // Banana is object of fruit class
$banana->set_fruit("Banana","Yellow","24");
$banana->get_fruit();


$netProfitBanana = $banana->profit(3456,800);

echo $netProfitBanana;


echo "<br/>===================================</br>";

$mengo = new Fruit(); // Mengo is object of frut class
$mengo->set_fruit("Mengo","Green","21");
$mengo->get_fruit();

$netProfitMengo = $mengo->profit(4456,1200);

echo $netProfitMengo;

echo "<br/>===================================</br>";


$totalFruitProfit =  $netProfitApple + $netProfitBanana + $netProfitMengo;

echo "Total fruit Profit is $totalFruitProfit";


?>