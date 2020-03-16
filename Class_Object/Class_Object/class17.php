<?php

abstract class Harishchandra{
	private $name = "Harishchandra";  //Blueprint.
	function sayHello()
	{
		print "I speak only the truth";
	}
}
class GentleMan extends Harishchandra{
	function sayHello() {
		parent::sayHello();
		print "<br>Truth is a way of life";
	}	
}
$gandhi = new GentleMan;
$gandhi->sayHello();

//print "<br> $gandhi->name";

//$obj = new Harishchandra;
//$obj->sayHello();
?>