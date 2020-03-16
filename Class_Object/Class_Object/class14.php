<?php

class message {
	private $msg = "Good Morning";

	function showoutput() {
		print "Hello How are You??$this->msg";
	}
}
$obj = new message;
$obj->showoutput();

print $obj->msg;
?>