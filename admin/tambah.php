<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
<form action="proses_tambah.php" method="post" id="form-add" novalidate="novalidate" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="kodeProduk">Kode Produk</label>
                    <input type="number" name="kodeProduk" class="form-control" id="kodeProduk" placeholder="Enter Code Product">
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label for="namaProduk">Nama Produk</label>
                    <input type="text" name="namaProduk" class="form-control" id="namaProduk" placeholder="Enter Name Product">
                  </div>
                  <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" placeholder="Enter Price">
                  </div>
                  <div class="form-group">
                    <label for="pricetanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Enter Date">
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Enter Information">
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select  name="category" class="form-control">
                      <option value="">Default</option>
                      <option value="1">Tablet</option>
                      <option value="2">Cair</option>
                      <option value="3">Bubuk</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input  name="image" type="file" class="custom-file-input" id="exampleInputFile" onchange="displayFileName(this)">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
    <!-- jadi disini fungsi file nya interfaces sekaligus penghubung buat si 
    tag bertemu (dilakukan dengan menggunakan tag form_action: proses_tambah.php)
    -->
</body>
</html> 