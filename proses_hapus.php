<?php
include_once("conn.php");

$id = $_GET["id"];
/*dan di result adalah perintah untuk menghapus yang ada di tabel customer 
menggunakan perintah mysqli */
$result = mysqli_query($conn, "DELETE FROM customer WHERE id='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:main.php");
?>