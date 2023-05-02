<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Program Menghitung Nilai</title>
</head>
<body>
    <h1 style="text-align: center;">Program Menghitung Nilai</h1>
    <div class="container">
         <div class="row">
            <div class="col-md-5" style="margin-left: 330px; background-color: #c0aefd;">
                <h5 style="text-align: center margin-left=10px">Program Menghitung Nilai</h5>
                <form method="post">
                    <div style="margin-left: -1px">
                    <p><b>Masukkan Nilai: </b></p>
                    <input class="form-control mb-2" type="text" name="nilai">
                    <input class="form-control mb-1 btn btn-primary" type="submit" name="hitung" value="Hitung">
                    </div>
                    <?php
                    $nilai=$_POST['nilai'];
                    $submit = $_POST['hitung'];
                    switch($_POST['nilai']){
                        case ($nilai >=90) && ($nilai <= 100);
                        $kategori = 'Anda mendapatkan nilai A';
                        break;
                        case ($nilai >=80) && ($nilai <= 90);
                        $kategori = 'Anda mendapatkan nilai B';
                        break;
                        case ($nilai >=70) && ($nilai <= 80);
                        $kategori = 'Anda mendapatkan nilai C';
                        break;
                        case ($nilai >=0) && ($nilai <= 70);
                        $kategori = 'Anda mendapatkan nilai D';
                        break;
                        default:
                        $kategori = "Isi Nilai tidak ditemukan";
                        break;
                    }
                    if(isset($submit)) {
                    ?>
                    <h3><?=$kategori; ?></h3>
                    <?php } ?>
            </div>
         </div>
    </div> 
</body>
</html>