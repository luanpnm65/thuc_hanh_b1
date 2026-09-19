<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		echo "Cau 1:", "<br>";
		$n = rand(0, 100);
		echo "n = $n", "<br>";
		for($x = 0; $x <= $n; $x++){
			if($x % 2 == 0){
				echo "$x ";
			}
		}
		echo "<br>";
	?>
</body>
</html>