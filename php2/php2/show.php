<?php
if($_GET['submit'])
{
	$name= $_GET['name'];
	$age = $_POST['age'];

	print"name:".$name."<br>"."age:".$age;
}
?>