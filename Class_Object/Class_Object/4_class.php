<?php
class Laptop{
    var $brand; //public
    var $color; //public
    var $price; //public

	function SetValues($b,$c,$p) {
		$this->brand = $b;
		$this->color = $c;
		$this->price = $p;		
	}
	function GetValues() {
		print "Hello I am $this->brand my color is $this->color and my price is $this->price!<br>"; 
	}

}
$obj = new Laptop;
$obj->SetValues("HP","Black",45000);
$obj->GetValues();

$a = new Laptop;
$a->SetValues("Sony","Blue",145000);
$a->GetValues();

?>