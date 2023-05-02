<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Menghitung Luas Jenis Bangun Datar</title>
</head>
<body>
	<h1 style="text-align:center ">Program Perhitungan Luas Persegi</h1><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-5" style="margin-left: 100px; background-color:#c0aefd;">
				<h5 style="text-align:center margin-left=10px;">Program Perhitungan Luas Persegi</h5>
				<form method="post">
					<div style="margin-left: -1px">
						<p><b>Sisi: </b></p>
						<input class="form-control mb-1" type="text" name="sisi"><br><br>
						<input type="submit" class="btn btn-primary" name="hitung" value="Hitung">
					</div>
					<?php
						if(isset($_POST['hitung'])) {
							$sisi = $_POST['sisi'];
							$luas = (int)$sisi * (int)$sisi;
							echo("Hasil perhitungan luas persegi adalah $luas cm<sup>2</sup>");
						}
					?>
			</div>
			<div class="col-md-5" style="background-color:#c0aefd;">
				<h5 style="text-align: center margin-left=10px; ">Program Perhitungan Luas Persegi Panjang</h5>
				<form method="post">
					<div style="margin-left: -1px">
						<p><b>Panjang: </b></p>
						<input class="form-control mb-1" type="text" name="panjang"> </br>
						<p><b>lebar: </b></p>
						<input class="form-control mb-1" type="text" name="lebar"><br><br>
						<input type="submit" class="btn btn-primary" name="hitung" value="Hitung">
					</div>
					<?php
					if(isset($_POST['hitung'])) {
						$panjang = $_POST['panjang'];
						$lebar = $_POST['lebar'];
						$luas = (int)$panjang * (int)$lebar;
						echo("Hasil perhitungan luas persegi panjang adalah $luas cm<sup>2</sup>");
					}
				?>
			</div>
			<div class="row">
				<div class="col-md-5" style=" margin-left: 100px;">
					<h5 style="text-align: center margin-left=10px;">Program Menghitung Luas Segitiga</h5>
					<form method="post">
						<div style="margin-left:-1px">
							<p><b>Alas: </b></p>
							<input class="form-control mb-1" type="text" name="alass"> </br>
							<p><b>Tinggi: </b></p>
							<input class="form-control mb-1" type="text" name="tinggii"><br><br>
							<input class="form-control mb-1 btn btn-primary" type="submit" class="btn btn-primary" name="hitung" value="Hitung">
						</div>
						<?php
				if(isset($_POST['hitung'])) {
					$alass = $_POST['alass'];
					$tinggii = $_POST['tinggii'];
					$luas = 0.5 * (int)$alass * (int)$tinggii;
					printf("Hasil perhitungan Luas Luas Segitiga adalah $luas cm<sup>2</sup>");
				}
				?>
				</div>
				<div class="col-md-5" >
					<h5 style="text-align: center margin-left: 100px;">Program menghitung Luas Jajaran Genjang</h5>
					<form method="post">
						<div style="margin-left:-1px">
							<p><b>Alas: </b></p>
							<input class="form-control mb-1" type="text" name="alas"><br>
							<p><b>Tinggi: </b></p>
							<input class="form-control mb-1" type="text" name="tinggi"><br><br>
							<input class="form-control mb-1 btn btn-primary" type="submit" class="btn btn-primary" name="hitung" value="hitung"><br>
						</div>
						<?php
							if(isset($_POST['hitung'])) {
								$alas = $_POST['alas'];
								$tinggi = $_POST['tinggi'];
								$luass = (int)$alas * (int)$tinggi;
								echo("Hasil perhitungan Luas Jajaran Genjang adalah $luass cm<sup>2</sup>");
							}
						?>
				</div>
			</div>
			<div class="col-md-5" style="margin-left: 100px;">
			<h5 style="text-align: center margin-left: 100px;">Program menghitung Luas Trapesium</h5>
					<form method="post">
						<div style="margin-left:-1px">
							<p><b>A: </b></p>
							<input class="form-control mb-2" type="text" name="a"><br>
							<p><b>B: </b></p>
							<input class="form-control mb-2" type="text" name="b"><br><br>
							<p><b>T: </b></p>
							<input class="form-control mb-2" type="text" name="t"><br><br>
							<input class="form-control mb-1 btn btn-primary" type="submit" class="btn btn-primary" name="hitung" value="hitung"><br>
						</div>
						<?php
							if(isset($_POST['hitung'])) {
								$a = $_POST['a'];
								$b = $_POST['b'];
								$t = $_POST['t'];
								$luasss = ((int)$a + (int)$b) *(int)$t/2;
								echo("Hasil perhitungan Luas Trapesium adalah $luasss cm<sup>2</sup>");
							}
						?>
				</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>