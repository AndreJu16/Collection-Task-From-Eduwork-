<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Menghitung Berat Badan Mu</title>
</head>
<body>
    <h1 style="text-align:center">Program Menghitung Berat Badan</h1><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-5" style="margin-left: 320px; background-color: #c0aefd;" >
                <h5 style="text-align:center margin-left=10px;">Program Perhitungan Berat Badan</h5>
                <form method="post">
                    <div style="margin-left: -1px">
                    <p><b>Nama: </b></p>
                    <input class="form-control mb-2" type="text" name="nama"><br>
                    <p><b>Tinggi badan: </b></p>
                    <input class="form-control mb-2" type="text" name="tinggi"><br>
                    <p><b>Berat badan:</b></p>
                    <input class="form-control mb-2" type="text" name="berat"><br><br>
                    <input class="form-control mb-1 btn btn-primary" type="submit" class="btn btn-primary" name="hitung" value="Hitung BMI">
                </div>
                <?php
                if(isset($_POST['hitung'])) {
                    $nama = $_POST['nama'];
                    $tinggi = $_POST['tinggi']/100;
                    // $kelamin = $_POST['kelamin'];
                    $berat = $_POST['berat'];
                    $bmi = (int)$berat / ($tinggi * $tinggi);
                    echo ucwords("Nama: $nama <br>");
                    // echo("Jenis Kelamin: $kelamin <br>");
                    echo("BMI anda adalah: ".number_format($bmi));
                    echo ("<br> Kesimpulannya: ");
                    if($bmi <17) {
                        echo "Tubuh anda termasuk Kurus";
                    }elseif ($bmi<23) {
                        echo "Tubuh anda termasuk Normal";
                    }elseif ($bmi<27) { 
                        echo "Tubuh anda termasuk Kegemukan";
                    }elseif ($bmi>27) {
                        echo"Tubuh anda termasuk Obesitas";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>