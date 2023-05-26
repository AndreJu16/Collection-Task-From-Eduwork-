<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen"
        href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <form action="" method="post">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Code Product</th>
                        <th>Nama Product</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    include 'conn.php';
    $query = mysqli_query($conn, "SELECT id, code_product, name_product, price, stock, created_at FROM `product`");
    $no=1;
    if(mysqli_num_rows($query)>0){
        while($data = mysqli_fetch_array($query)) {
    ?>
                    <tr>
                        <td>
                            <?= $no?>
                        </td>
                        <td>
                            <?= $data['code_product']?>
                        </td>
                        <td>
                            <?= $data['name_product']?>
                        </td>
                        <td>
                            <?= $data['price']?>
                        </td>
                        <td>
                            <?= $data['stock']?>
                        </td>
                        <td>
                            <a class='btn btn-success' href='edit.php?id=<?php echo $data["id"];?>'>Edit</a>
                            <a class='btn btn-danger' href='proses_hapus.php?id=<?php echo $data["id"]?>'>Delete</a>
                        </td>
                    </tr>
                    <?php $no++; };?>
                    <?php } ?>
                </tbody>
            </table>
            <script>
                $(document).ready(function () {
                    $('#myTable').DataTable();
                });
            </script>
    </form>
    <a href="tambah.php">Tambah Buku</a><br /><br />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
<!-- 1. Pemberitahuan awalan dalam membuat aplikasi ini adalah sebagai berikut : pertama membuat 
main.php sebagai GUI yang menampilkan table database. kemudian setelah membuat struktur dari HTML nya yang dimana
sebagai penampil database selanjutnya jika ingin melihat isi dari database menggunakan perulangan agar 
dapat melihat data yang ada kemudian setelah main.php berhasil di buat lanjut ke pembuatan form tambah.php 
2. jika ingin ke fitur edit maka kita pergi ke file edit.php
3. jika ingin ke fitur hapus maka kita pergi ke file proses.php -->

</html>