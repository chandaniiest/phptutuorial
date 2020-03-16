<?php
class message {
	
	static $msg = "Today is a beautiful day!";
	function showMessage(){
		print "Hello!!!Good Afternoon and Have a Good Day!<hr>";
	}
}
message::showMessage();
print message::$msg;

?>