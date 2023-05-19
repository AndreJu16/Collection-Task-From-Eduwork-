<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            border: 1px solid red;
        }
        .error-message {
            color : red;
            font-size: 12px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                var formValid = true; 

                $(this).find("input[type='text']").each(function() {
                    var fieldValue = $(this).val();
                    var errorMessage = $(this).data('error');

                //     if ($(this).val() === '') {
                //       $(this).addClass("error");

                //       if (!$(this).next(".error-message").length) {
                //         $(this).after('<span class="error-message">This Field is required</span>');
                //       }
                      
                //       formValid = false;  
                //     } else {
                //         $(this).removeClass("error");
                //         $(this).next(".error-message").remove();
                //     }
                // });

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
                    // $("form input[type='text']").filter(function() {
                    //     return $(this).val() === '';
                    // }).first().focus("#nama_depan");
                    }
            });
        });
    </script>
</head>
<body>    
<form name="myForm" action="proses_tambah.php" method="POST">
    <table width="25%" border="0">
            <tr>
                <td>First Name</th>
                <td><input type="text" id="nama_depan" name="nama_depan" data-error="First Name harus diisi"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" id="nama_belakang" name="nama_belakang" data-error="Last Name harus diisi"></td>
            </tr>    
            <tr>
                <td>Email</td>
                <td><input type="email" id="surel" name="surel" data-error="Email harus diisi"></td>
            </tr>    
             <tr>
                <td>Phone</td>
                <td><input type="text" id="no_telp" name="no_telp" data-error="No Telepon harus diisi"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" id="alamat" name="alamat" data-error="Alamat harus diisi"></td>
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


