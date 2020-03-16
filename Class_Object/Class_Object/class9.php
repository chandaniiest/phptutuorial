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
		print "<HR>Bye From $this->name";
	}
}
$a = new softDrinks("Coca cola",45, "800ml");
$a->showResult();

$b = new softDrinks("ThumbsUp",30, "500ml");
$b->showResult();

$c = new softDrinks("Sprite",40, "750ml");
$c->showResult();

?>