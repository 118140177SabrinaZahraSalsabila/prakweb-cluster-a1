<!DOCTYPE html>
<html>
<head>
	<title>Modul 6 Tugas No.2 Sabrina Zahra Salsabila</title>
</head>
<body>
	<center>
		<div class = "container">
		<div class="row">
			<h2>Fungsi Penghitung Harga Bet Berdasarkan Panjang Nama</h2>
			<br>
				<form action="" method="get">
					<label for="nama">Masukkan Nama : </label>
					<input type="text" id="nama" name="nama" required>
					<br><br>
					<label for="warna">Masukan Warna Font : </label>
					<select name="warna" id="warna" name="warna">
						<option value="">Pilih Warna</option>
						<option value="Hitam">Hitam</option>
						<option value="Coklat">Coklat</option>
						<option value="Emas">Emas</option>
					</select>
				</center>
				</form>
					<br><br>
					<center><button type="submit" name="submit">Cek Total Harga</button></center>
	</form>
	<br>
	<?php
		function tampil($nama,$warna){
			$count=strlen($nama);
			$sum=0;

			if($count<=10 && $count>=1){
				for($i=1;$i<=$count;$i++){
					$sum=$sum+300;
				}

				if ($warna=="hitam" || $warna=="Hitam"){
					echo "<font style='color: black;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna=="coklat" || $warna=="Coklat"){
					echo "<font style='color: brown;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna=="emas" || $warna=="Emas"){
					echo "<font style='color: yellow;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna==""){
					echo "<font style='color: red;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

			}

			else if ($count>=11 && $count<=20){
				for($i=1;$i<=$count;$i++){
					$sum=$sum+500;
				}

				if($warna=="hitam" || $warna=="Hitam"){
					echo "<font style='color: black;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if($warna=="coklat" || $warna=="Coklat"){
					echo "<font style='color: brown;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if($warna=="emas" || $warna=="Emas"){
					echo "<font style='color: yellow;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if($warna=="") {
					echo "<font style='color: red;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}
			}

			else if ($count<=20){
				for($i=1;$i<=$count;$i++){
					$sum=$sum+700;
				}

				if ($warna=="hitam" || $warna=="Hitam"){
					echo "<font style='color: black;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna=="coklat" || $warna=="Coklat"){
					echo "<font style='color: brown;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna=="emas" || $warna=="Emas"){
					echo "<font style='color: yellow;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna=="") {
					echo "<font style='color: red;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

			}
		}
		if (isset($_GET["submit"])){
			tampil($_GET["nama"],$_GET["warna"]);
		}
	?>
</body>
</html>