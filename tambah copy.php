<form action="proses_tambah.php" method="POST">
    <table width="25%" border="0">
            <tr>
                <td>first_name</th>
                <td><input type="text" name="nama_depan"></td>
            </tr>
            <tr>
                <td>last_name</td>
                <td><input type="text" name="nama_belakang"></td>
            </tr>    
            <tr>
                <td>email</td>
                <td><input type="text" name="surel"></td>
            </tr>    
            <tr>
                <td>phone</td>
                <td><input type="text" name="no_telp"></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="alamat"></td>
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


