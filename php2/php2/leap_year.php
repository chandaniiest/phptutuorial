<html>
	<body>
		<form action="" method="post">
			<table>
			<tr>
				<th>year</th>
			</tr>
			<tr>
				<td><input type="text" name="year"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
			</table>
		</form>
	</body>
</html>
<?php
if($_POST['year'])
	{
	$year=$_POST['year'];

		
			if($year%4==0 && $year%100!=0 || $year%400==0 )
			{
				print"yes this year is leap year";
			}
			else{

				print" no this year is not leap year";

			}
	}
	elseif(!is_numeric($year))
		{
			print"Strings not allowed, Input should be a number";
		}
?>