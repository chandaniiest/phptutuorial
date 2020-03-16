<?php
class Laptop{
    var $brand; //public
    var $color; //public
    var $price; //public

	function __construct($b,$c,$p) {  //Constructor
		$this->brand = $b;
		$this->color = $c;
		$this->price = $p;		
	}
	function GetValues() {
		print "Hello I am $this->brand my color is $this->color and my price is $this->price!<br>"; 
	}

}
$obj = new Laptop("Dell","Silver",56000);
$obj->GetValues();



?>