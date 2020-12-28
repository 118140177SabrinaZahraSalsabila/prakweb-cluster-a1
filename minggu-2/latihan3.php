<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 5 No.3 Sabrina Zahra Salsabila/title>
</head>

<body>
	<?php

	echo "Menampilkan bilangan Prima dari 1 sampai dengan 50<br><br>";
	for ($s=1; $s<=50; $s++) {
		$a = 0;
		for ($y=1; $y<=$s; $y++) {
			if ($s % $y == 0) {
				$a++;
			}
		}
		if ($a == 2) {
			echo $s . '<br>';
		}
	}
	?>
</body>
</html>