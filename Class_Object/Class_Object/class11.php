<?php
class Employee{
	var $name;   var $designation;    var $salary;
	function __construct($n, $d, $s){
		$this->name = $n;
		$this->designation = $d;
		$this->salary = $s;
	}
	function identify(){
		print "My name is $this->name, I work as a $this->designation for a salary of $this->salary. ";
	}
}
class Branch_Manager extends Employee { //Inheritence
	var $location;

	function __construct($n, $d, $s, $l){
		$this->location = $l;
		parent::__construct($n, $d, $s);
	}
	function identify()  //You have overridden the parent identify() function
	{
		parent::identify();
		//print "My name is $this->name, I work as a $this->designation for a salary of $this->salary.My Branch is $this->location";
		print "My Branch is $this->location";
	}
}
$e = new Branch_Manager("Amit", "Branch Manager", 2000000, "Mumbai");
$e->identify();
?>