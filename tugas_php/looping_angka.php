<?php
// kondisi pertama untuk melakukan pemberian nilai variabel terhadap $i=0 
// yang kalau kondisinya <=8 malakukan penambahan row sebanyak satu. 
for ($i=0; $i<=8; $i++) {   
    // kemudian jika kalau isi dari variabel $j = 4 dan $j >= 5 yang saat itu posisi $i=5 lakukan pengurangan, tampilkan spasi
    for ($j=4; $j>=$i; $j--) {
        echo " ";
    // for $k=0 jika $k=$i yang bernilai 5 maka lakukan tambah satu lalu tampilkan nilai $k
    }for ($k=0; $k<=$i; $k++) {
         echo "$k ";
    }echo "<br>";
}
?>  