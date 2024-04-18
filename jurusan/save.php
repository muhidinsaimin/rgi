<?php
if (isset($_POST['simpan'])) {
    include_once('setting.php');
    $jurusan = $_POST['jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "INSERT INTO jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header('location: index.php?m=jurusan');
    } else {
        include "index.php?m=jurusan&s=add";
        echo '<script language="JavaScript">';
        echo  'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}