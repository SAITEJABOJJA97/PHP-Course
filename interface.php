<?php

/*
interface Interfacename {

    public function m1();
    public function m2($p1,$p2);
    public function m3() : string;

}
*/


interface Human {

    public function walk($name);
}

class Asian implements Human {
  
    public function walk($name) {
        $this->name = $name;
        echo " $this->name : Asian walking!";
    }

}

class Afican implements Human {
  
    public function walk($name) {
        $this->name = $name;
        echo " $this->name :Afican walking!";
    }

}


class American implements Human {
  
    public function walk($name) {
        $this->name = $name;
        echo " $this->name : American walking!";
    }

}

class Europion implements Human {
  
    public function walk($name) {
        $this->name = $name;
        echo " $this->name : Europion walking!";
    }

}


$a1 = new Asian();
$a1->name = 'jaypal';

$a1->walk("jaypal");

echo "</br>";


$b1 = new Afican();
$b1->name = 'Urmi';
$b1->walk("Urmi");


echo "</br>";

$c1 = new American();
$c1->name = 'Smith';
$c1->walk("Smith");


echo "</br>";


$d1 = new Europion();
$d1->name = 'Jonas';
$d1->walk("Jonas");


echo "</br>=================================</br>";

$humnawalks = array("jay"=>$a1,"Urmi"=>$b1,"Smith"=>$c1,"Jonas"=>$d1); // associative array

foreach($humnawalks as $humname=>$hum){

    $hum->walk($humname);
    echo '</br>';


}

// type 2

// $humnawalks = array($a1,$b1,$c1,$d1);// indexed array



// foreach($humnawalks as $hum){
//     //$d1->walk("Jonas");
//     $hum->walk($hum->name);
//     echo '</br>';


// }


?>