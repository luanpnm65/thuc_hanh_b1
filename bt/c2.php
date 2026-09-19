<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
	<?php
	echo "Cau 2:", "<br>";
	echo "<tr>";
	for($i = 1; $i <= 10; $i++){
		echo "<th>";
		echo "Chương $i";
		echo "</th>";
	}
	for($i = 1; $i <= 10; $i++){
		echo "<tr>";
		for($j = 1; $j <= 10; $j++){
			echo "<th>";
			echo $j, " x ", $i, " = ", $i*$j;
			echo "</th>";
		}
		echo "</tr>";
	}
	?>
</table>
</body>
</html>