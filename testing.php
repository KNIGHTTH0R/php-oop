<?php

// class
class testing{

  //different between public, protected, private
  // public : can call by averyone
  // protected : only can call by inheritance
  // private : only can call in this class

  // property
  // public $text = 'Welcome to the OOP';
  // public $int = 123;
  public $text;
  public $int;

  //metode
  public function home(){
    echo $this->text;
  }

  public function count(){
    return $this->int;
  }

  //constructor
  public function __construct(){
    echo 'This is come from construct<br>';
  }

  // metode set and metode get
  public function set_bro($param){
    $this->text = $param;
  }

  public function get_bro(){
    return $this->text."<br>";
  }

  public function set_chaining($param){
    $this->int = $param;
    return $this;
  }

  public function get_chaining($param){
    return $this->int."<br>";
  }

  // magic method
  public function __toString(){
    return 'This is magic method';
  }

}

?>
