<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<!-- jadi di php ini adalah file untuk memasukkan data ke dalam database yang 
terhubung melalui conn.php. setelah itu tag mysqli_query yang berfungsi untuk 
melakukan query di database sql  -->
<?php
include_once("conn.php");
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id'");
/*kemudian di tag mysqli_fetch_array yang berfungsi sebagai pengambilan data dari mysqli 
serta menggunakan loop do while sebagai inisialisasi variabel*/
while ($customer = mysqli_fetch_array($query)) {
    $namaDepan = $customer['first_name'];
    $namaBelakang = $customer['last_name'];
    $surel = $customer['email'];
    $noTlp = $customer['phone'];
    $alamat = $customer['address'];
}
?>
<!-- kemudian ini sebagai interfaces buat tampilan proses edit --> 
<form action="proses_ubah.php?id=<?php echo $id ?>" method="post">
<table>
            <tr>
                    <td>First Name </th>
                    <td><input type="text" name="nama_depan" value="<?php $namaDepan ?>"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="nama_belakang" value="<?php $namaBelakang ?>"></td>
                </tr>    
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="surel" value="<?php $surel ?>"></td>
                </tr>    
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="no_telp" value="<?php $noTlp ?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="alamat" value="<?php $alamat ?>"></td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" name="submit" value="Ubah"></td>
            </tr>
    </table>
</form>
