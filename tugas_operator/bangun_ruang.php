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
	<h1 style="text-align:center ">Program Perhitungan Bangun Ruang</h1><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-5" style="margin-left: 100px; background-color:#c0aefd;">
				<h5 style="text-align:center margin-left=10px;">Program Perhitungan Volume Kubus</h5>
				<form method="post">
					<div style="margin-left: -1px">
						<p><b>Sisi: </b></p>
						<input class="form-control mb-2" type="text" name="sisi"><br><br>
						<input class="form-control mb-1 btn btn-primary" type="submit" class="btn btn-primary" name="hitung" value="Hitung">
					</div>
					<?php
						if(isset($_POST['hitung'])) {
							$sisi = $_POST['sisi'];
							$volume = (int)$sisi * (int)$sisi * (int)$sisi;
							echo("Hasil perhitungan Volume Kubus adalah $volume cm<sup>3</sup>");
						}
					?>
			</div>
			<div class="col-md-5" style="background-color:#c0aefd;">
				<h5 style="text-align: center margin-left=10px; ">Program Perhitungan Volume Balok</h5>
				<form method="post">
					<div style="margin-left: -1px">
						<p><b>Panjang: </b></p>
						<input class="form-control mb-1" type="text" name="panjang"> </br>
						<p><b>Lebar: </b></p>
						<input class="form-control mb-1" type="text" name="lebar"><br><br>
                        <p><b>Tinggi: </b></p>
						<input class="form-control mb-1" type="text" name="tinggi"><br><br>
						<input class="form-control mb-5 btn btn-primary" type="submit" class="btn btn-primary" name="hitung" value="Hitung">
					</div>
					<?php
					if(isset($_POST['hitung'])) {
						$panjang = $_POST['panjang'];
						$lebar = $_POST['lebar'];
                        $tinggi = $_POST['tinggi'];
						$volume = (int)$panjang * (int)$lebar * (int)$tinggi;
						echo("Hasil perhitungan Volume Balok panjang adalah $volume cm<sup>3</sup>");
					}
				?>
			</div>
			<div class="row">
				<div class="col-md-5" style=" margin-left: 100px;">
					<h5 style="text-align: center margin-left=10px;">Program Menghitung Volume Tabung</h5>
					<form method="post">
						<div style="margin-left:-1px">
							<p><b>Jari-jari: </b></p>
							<input class="form-control mb-1" type="text" name="jari"> </br>
							<p><b>Tinggi: </b></p>
							<input class="form-control mb-1" type="text" name="tinggii"><br><br>
							<input class="form-control mb-1 btn btn-primary" type="submit" class="btn btn-primary" name="hitung" value="Hitung">
						</div>
						<?php
				if(isset($_POST['hitung'])) {
					$jari = $_POST['jari'];
					$tinggii = $_POST['tinggii'];
                    $phi = 3.14;
					$volume = $phi * (int)$jari * (int)$jari * (int)$tinggii;
					printf("Hasil perhitungan Volume Tabung adalah $volume cm<sup>3</sup>");
				}
				?>
				</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>