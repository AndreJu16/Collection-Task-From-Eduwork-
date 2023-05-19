<?php
$namaDepan = $_POST['nama_depan'];
$namaBelakang  = $_POST['nama_belakang'];
$surel      = $_POST['surel'];
$noTlp      = $_POST['no_telp'];
$alamat    = $_POST['alamat'];

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

$result = mysqli_query($conn, "INSERT INTO `customer` (`first_name`, `last_name`, `email`, `phone`, `address`) VALUES  
('$namaDepan', '$namaBelakang', '$surel', '$noTlp', '$alamat');");

/* lalu setelah data dimasukkan dan diproses kemudian 
akan menampilkan kembali ke file main.php*/
header("Location:main.php");
?>