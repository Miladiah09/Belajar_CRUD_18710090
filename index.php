<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD 18710090</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <div class= "container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Customer
            </div>
            <div class"card-body">
                <form action=""method="POST"class="form-item">
                    <div class="form.group">
                        <label for="nama">Nama Customer</label>
                        <input type="text"name="nama" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form.group">
                        <label for="Telp">Telepon</label>
                        <input type="number"name="telp" class="form-control col-md-9" placeholder="Masukkan Telepon">
                    </div>

                    <div class="form.group">
                        <label for="nama">Alamat</label>
                        <input type="text"name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form.group">
                        <label for="nama">Kota</label>
                        <input type="text"name="kota" class="form-control col-md-9" placeholder="Masukkan Kota">
                    </div>

                    <div class="form.group">
                        <label for="nama">Kode Pos</label>
                        <input type="number"name="kodepos" class="form-control col-md-9" placeholder="Masukkan Kode Pos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>

<?php
        include "koneksi.php";
        if(isset($_POST['simpan']))
        {
            $nama        = $_POST['nama'];
            $telp        = $_POST['telp'];
            $alamat      = $_POST['alamat'];
            $kota        = $_POST['kota'];
            $kodepos     = $_POST['kodepos'];

            mysqli_query($koneksi,"INSERT INTO customer VALUES('',
                '$nama','$telp','$alamat','$kota','$kodepos'
            )") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-penjualan/data_customer.php'>";
        }
?>