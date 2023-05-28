<?php
include_once("conn.php");
/* namun sebelum masuk ke conn.php dia akan diinisialisasikan 
di result dengan perintah masukkan data (INSERT INTO) seperti 
perintah dibawah ini*/

$targer_dir = "../public/img_uploaded/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = true;
$move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


$kodeProduk  = $_POST['kode_produk'];
$namaProduk  = $_POST['nama_produk'];
$harga       = $_POST['hargaa'];
$gambarNama  = $_FILES['image']["name"];
$tanggal     = $_POST['tanggall'];
$keterangan  = $_POST['keterangann'];
$kategori    = $_POST['kategorii'];
/*
jadi setelah dipanggi dari form action yang ada pada file tambah.php
kemudian disinilah proses itu terjadi untuk melakukan proses 
inisialisasi tag untuk dipertemukan agar memasukkan form tersebut 
ke database melalui perintah :

include_once 
*/


$result = mysqli_query($conn, "INSERT INTO `product` (`code_product`, `name_product`, `price`, `image`, `created_at`, `information`, `id_categories`) VALUES  
('$kodeProduk', '$namaProduk', '$harga', '$gambarNama', '$tanggal', '$keterangan', '$kategori');");

// ini cara melakukan debug
// echo "INSERT INTO `customer` (`code_product`, `name_product`, `price`, `stock`, `created_at`) VALUES ('$kodeProduk', '$namaProduk', '$harga', '$tersedia', '$ada');";
// exit();

/* lalu setelah data dimasukkan dan diproses kemudian 
akan menampilkan kembali ke file main.php*/
header("Location:index.php");
?>