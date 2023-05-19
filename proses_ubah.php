<?php 
include_once("conn.php");

$id = $_GET["id"];

$namaDepan = $_POST['nama_depan'];
$namaBelakang = $_POST['nama_belakang'];
$surel = $_POST['surel'];
$noTlp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

/* dan disini juga sebagai inisialisasi perkenalan antar tag yang telah dibuat (di result nya) */
$result = mysqli_query($conn, "UPDATE `customer` SET 
first_name='$namaDepan', last_name='$namaBelakang', email='$surel', phone='$noTlp', address='$alamat'
WHERE id='$id';");

error_reporting(E_ALL);
ini_set('display_error', 1);
/*kemudian setelah diproses kembali ke halaman main.php */
header("Location:main.php");
?>