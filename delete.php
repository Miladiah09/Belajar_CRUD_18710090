<?php
    include "koneksi.php";
    $id = $_GET['idcustomer'];
    $ambildata = mysqli_query($koneksi, "DELETE FROM customer WHERE idcustomer='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-penjualan/data_customer.php'>";
?>
