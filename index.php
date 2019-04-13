<?php

// class
class testing{

  // property
  public $text = 'Welcome to the OOP';
  public $int = 123;

  //metode
  public function home(){
    echo $this->text;
  }

  public function count(){
    return $this->int;
  }

}

$hello = new testing;
// echo $hello->text." ".$hello->int;
$hello->home();
echo $hello->count();
?>
