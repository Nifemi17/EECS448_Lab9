<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$cols = 100;
$rows = 100;

echo "<table border = 1>";
	echo('<tr>');
	echo "<td> 0 </td>\n";
	for($row = 1; $row <= $rows; $row++)
	{
		echo "<td> $row </td> \n";
	}
	echo('</tr>');
	for($row = 1; $row <= $rows; $row++)
	{
		echo('<tr>');

		echo('<td>' .$row. '</td>');
		for($col = 1; $col <= $cols; $col++)
		{
			echo('<td>' .$col*$row.'</td>');
		}
		echo ('</tr>');
	}

echo("</table>");

?>
