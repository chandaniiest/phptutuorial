<?php
class softDrinks {
	var $name;
	var $price;
	var $size;

	function showResult() {
		print "<br>Hello I am $this->name, my price is $this->price and my size is $this->size ";
	}
	function __construct($n,$p,$s) {
		$this->name = $n;
		$this->price = $p;
		$this->size = $s;
	}
	function __destruct() {
		print "<br>Bye From $this->name";
	}
}
$obj = new softDrinks("Coca cola",45, "800ml");
$obj->showResult();

print "<br><h1>Hello I am Fanta</h1>";
?>
Hello
Apple
Good Morning
dfghjklk