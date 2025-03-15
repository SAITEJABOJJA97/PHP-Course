<?php
namespace Html;
class Students {
  public $name = "";
  public $marks = 0;

  public function sInfo() {
    echo "<p>Student '{$this->name}' got {$this->marks}.</p>";
  }
}
 
?>