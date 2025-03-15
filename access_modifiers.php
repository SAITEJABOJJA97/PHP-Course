<?php

//final class Human {
  class Human {
   
   const family_name = "Shah"; // this is constant

  // family_name = "Patel"; // this is constant
   public $name;
   protected $email;
   private $phone;


   /*public function __construct($name){

    $this->name = $name;

   }*/

   function set_name($name,$email,$phone){ // public function by default

    $this->name = $name;
    //$this->email = $email;
   // $this->phone = $phone;
    
      $this->set_email($email);
      $this->set_phone($phone);

    //$this->family_name = "Brahmbhatt";

//   echo "Family name is  " . self::family_name; // constant
  // echo "</br>Family name is  " . Human::family_name; // constant

  }
  
  protected function set_email($e){ // protected function

    $this->email =  $e;  


  }

  private function set_phone($p){ //private function

    $this->phone =  $p;

  }

  private function about(){
    
     echo "My  name is {$this->name}.</br>";

  }

  //final public function info(){
  public function info(){

    echo "I am from human class : What is my name?</br>";

    $this->about2();

  }

  protected function about2(){

    $this->about();

  }



} 


class Robo_human extends Human{
    
     public function info(){

        echo "I am from child class as Robo Human : What is my name?</br>";

        $this->about2();

     }


}


$krishna =  new Robo_human();
//$krishna->name= 'krishna';
$krishna->set_name("Krishna","k@gmail.com","0453123111");


$krishna->info();



echo '<pre>'.print_r($krishna,true).'<pre>';


echo Human::family_name;
exit;
//$krishna->about();



$jay = new Human();
//$jay->name = "Jay"; // public 
//$jay->email = "j@rmail.com";  // protected 
//$jay->phone = "0777232456"; // private


$jay->set_name("Jay","j@gmail.com","0453211111");

//$jay->set_email("j@gmail.com");

//$jay->set_phone("0453211111");
echo '<pre>'.print_r($jay,true).'</pre>';exit;




//$krishna =  new Robo_human();
//$krishna->info();


echo '<pre>'.print_r($jay,true).'<pre>';
echo '<pre>'.print_r($krishna,true).'<pre>';




?>


