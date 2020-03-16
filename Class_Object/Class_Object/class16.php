<?php

final class Brahmachari
{
	private $name = "Bill";  //Blueprint.

	function sayHello()
	{
		print "Hello and Good Morning from $this->name!";
	}
}
class child extends Brahmachari
{
	
}

$obj = new Brahmachari;
$obj->sayHello();
print $obj->name
?>