<?php

require_once 'testing.php';

$hello = new testing;
// echo $hello->text." ".$hello->int;
// $hello->home();
// echo $hello->count();
$hello->set_bro('This is set and get method');
echo $hello->get_bro()."<br>";

$human = new people;
$human->set_bro('This is come from inheritance');
echo $human->get_bro();
$human->hai();

?>
