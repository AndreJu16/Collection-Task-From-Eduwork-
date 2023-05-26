<?php
$kodeProduk  = $_POST['kode_produk'];
$namaProduk  = $_POST['nama_produk'];
$harga       = $_POST['hargaa'];
$tersedia    = $_POST['tersediaa'];
$ada    = $_POST['adaa'];

/*
jadi setelah dipanggi dari form action yang ada pada file tambah.php
kemudian disinilah proses itu terjadi untuk melakukan proses 
inisialisasi tag untuk dipertemukan agar memasukkan form tersebut 
ke database melalui perintah :

include_once 
*/
include_once("conn.php");
/* namun sebelum masuk ke conn.php dia akan diinisialisasikan 
di result dengan perintah masukkan data (INSERT INTO) seperti 
perintah dibawah ini*/

$result = mysqli_query($conn, "INSERT INTO `customer` (`code_product`, `name_product`, `price`, `stock`, `created_at`) VALUES  
('$kodeProduk', '$namaProduk', '$harga', '$tersedia', '$ada');");

/* lalu setelah data dimasukkan dan diproses kemudian 
akan menampilkan kembali ke file main.php*/
header("Location:index.php");
?>