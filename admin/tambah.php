<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        .error {
            border: 1px solid red;
        }

        .error-message {
            color: red;
            font-size: 12px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("form").submit(function (event) {
                var formValid = true;

                $(this).find("input[type='text']").each(function () {
                    var fieldValue = $(this).val();
                    var errorMessage = $(this).data('error');
                    if (fieldValue === '') {
                        $(this).addClass("error");
                        $(this).next(".error-message").remove();
                        $(this).after('<span class="error-message">' + errorMessage + '</span>');

                        formValid = false;
                    } else {
                        $(this).removeClass("error");
                        $(this).next(".error-message").remove();
                    }
                });
                if (!formValid) {
                    event.preventDefault();
                }
            });
        });
    </script>
</head>

<body>
    <form name="myForm" action="proses_tambah.php" method="POST">
        <table width="25%" border="0">
            <tr>
                <td>Kode Produk</th>
                <td><input type="text" id="kode_produk" name="kode_produk" data-error="Kode produk harus diisi"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" id="nama_produk" name="nama_produk" data-error="Nama produk harus diisi"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" id="hargaa" name="hargaa" data-error="Harga harus diisi"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" id="tersediaa" name="tersediaa"></td>
            </tr>
            <tr>
                <td>Ada</td>
                <td><input type="text" id="adaa" name="adaa" data-error="Alamat harus diisi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    <!-- jadi disini fungsi file nya interfaces sekaligus penghubung buat si 
    tag bertemu (dilakukan dengan menggunakan tag form_action: proses_tambah.php)
    -->
</body>
</html> 