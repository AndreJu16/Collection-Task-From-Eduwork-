<?php 
    // disini menginisialisasi bahwa variabel i sama dengan 9
    $i=9;
    // nah untuk kondisi variabel inisialisasi a=1, jika kondisi nya $a kurang dari $i 
    // maka variabel a lakukan penambahan 1 sampai memenuhi 9 ke kanan     
    for($b=1; $b<=$i; $b++){
        // lalu kondisi kedua adalah jika $c= $i maka lakukan pengurangan 1 ke bawah
        for($c=$i; $c>=$b; $c-=1){
        // tampilkan bintang     
            echo"*";
        }
        // lakukan baris baru
        echo"<br>";
    }
?>
