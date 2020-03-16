<html>
<body>
<form action="" method="post">
color:<input type="text" name="color" placeholder="color">
<br>
<input type="submit" value="submit" name="send">
</form>
<?php
$favcolor=$_POST['color'];
if($_POST['send'])
{
	switch ($favcolor) {//red
		case "red":
			echo "Your favorite color is red!";
			break;
		case "blue"://blue
			echo "Your favorite color is blue!";
			break;
		case "green":
			echo "Your favorite color is green!";
			break;
		default:
			echo "Your favorite color is neither red, blue, nor green!";
	}
}
?>
 
</body>
</html>
