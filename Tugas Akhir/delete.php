<?php
    include "koneksi.php";
    $isbn = $_GET['isbn'];
    mysqli_query($koneksi, "DELETE FROM datBuku WHERE isbn='$isbn'") or die();

    header("location:dashboard.php?pesan=delete");
?>