<?php
class SayHello{
    var $msg = "Happy New Year"; //public

	function PrintHello() {
		print "Hello and Good Morning!<br>"; 
	}

}

$obj = new SayHello;
$obj->PrintHello();

print $obj->msg;
?>