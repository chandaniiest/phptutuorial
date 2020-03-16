<?php
$num = 24;
$prime = true;

for($i=2; $i<$num; $i++) {
	if($num%$i==0) {
		$prime = false;
		break;
	}
}
if($prime == true) {
	print "$num is a Prime Number";
}
else {
	print "$num is Not a Prime Number";
}
?>
