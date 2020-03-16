<?php
class Laptop{
    var $brand = "Dell"; //public
    var $color = "Red"; //public
    var $price = 30000; //public

	function GetValues() {
		print "Hello I am $this->brand my color is $this->color and my price is $this->price!<br>"; 
	}

}

$obj = new Laptop;
$obj->GetValues();

?>