<?php
interface USB
{
	function connect($str);
	function disconnect();
	function transferData();
	function transferPower();
}
class Port implements USB
{
	function connect($str)
	{
		//Some Coding Here
	}
	function disconnect()
	{
		//Some Coding Here
	}
	function transferData()
	{
		//Some Coding Here
	}
	function transferPower()
	{
		//Some Coding Here
	}
}
class Mouse implements USB 
{
	function connect($str)
	{
		//Some Coding Here
	}
	function disconnect()
	{
		//Some Coding Here
	}

	function transferData()
	{
		//Some Coding Here
	}


	function transferPower()
	{
		//Some Coding Here
	}
}
?>