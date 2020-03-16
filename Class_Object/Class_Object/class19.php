<?php
class MyClass
{
  public $public = 'Apple';
  protected $protected = 'Mango';
  private $private = 'Banana';

 function printHello()
  {
   echo $this->public."<br>";
   echo $this->protected."<br>";
   echo $this->private."<br>";
  }
}
$obj = new MyClass();
$obj->printHello();

//echo $obj->public; // Works
//echo $obj->protected; // Fatal Error
//echo $obj->private; // Fatal Error
//$obj->printHello(); // Shows Public, Protected and Private
?>