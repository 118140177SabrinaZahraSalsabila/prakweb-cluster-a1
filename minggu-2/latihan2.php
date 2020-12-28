
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 5 No.2 Sabrina Zahra Salsabila</title>
</head>

<body>
	<?php
	$nama = array("lanirne", "aduh", "qifuat", "toda", "anevi" , "samid", "sabi", "sabrina", "zahra", "salsabila");

	echo "Tampilan nama sebelum diurutkan : <br>";
	$n = 1;
	foreach ($nama as $value) {
		echo "$n. $value <br>";
		$n++;
	}
    echo "<br>Tampilan nama setelah diurutkan adalah sebagai berikut : <br>";
	echo "<br>Diurutkan dari A-Z : <br>";
	sort($nama);
	$n = 1;
	foreach ($nama as $value) {
		echo "$n. $value <br>";
		$n++;
	}

	echo "<br>Diurutkan dari Z-A : <br>";
	rsort($nama);
	$n = 1;
	foreach ($nama as $value) {
		echo "$n. $value <br>";
		$n++;
	} 
	?>
</body>
</html>