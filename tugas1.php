<!DOCTYPE html>
<html>
<head>
	<title>Modul 6 Tugas No.1 Sabrina Zahra Salsabila</title>
</head>
<body>
		<h1>Fungsi Menghitung Nilai Faktorial dari Suatu Bilangan</h1>

		<form action="" method="get">
			<label for="input">Masukkan Bilangan : </label>
			<input type="number" id="input" name="angka">
			<button type="submit" name="submit">Hitung Faktorial</button>
		</form><br>
	</body>
</html>
	<?php
	function faktorial($n){
	$fktrl = 1;
	echo "Hasil dari $n! = ";
			for($i=$n;$i>0;$i--)
			{
				if ($i==1) {
					echo "$i";
				}
				else {
					echo "$i * ";
				}
				$fktrl=$fktrl*$i;
			}
			echo " = $fktrl";
		}
		if (isset($_GET["submit"])) {
				faktorial($_GET["angka"]);
		}
	?>