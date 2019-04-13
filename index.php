<?php

// class
class testing{

  // property
  // public $text = 'Welcome to the OOP';
  // public $int = 123;
  public $text;
  public $int;

  //metode
  // public function home(){
  //   echo $this->text;
  // }
  //
  // public function count(){
  //   return $this->int;
  // }

  // metode set and metode get
  public function set_bro($param){
    $this->text = $param;
  }

  public function get_bro(){
    return $this->text;
  }

}

$hello = new testing;
// echo $hello->text." ".$hello->int;
// $hello->home();
// echo $hello->count();
$hello->set_bro('This is set and get method');
echo $hello->get_bro();
?>
