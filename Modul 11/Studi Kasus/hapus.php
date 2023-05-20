<?php
    include "koneksi.php";
    $nim = $_GET['NIM'];
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE NIM='$nim'") or die();

    header("location:full.php?pesan=hapus");
?>