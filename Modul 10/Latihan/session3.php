<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset ($_SESSION);
        session_destroy();
        echo "<h1>Kamu sudah berhasil logout/keluar</h1>";
        echo "<h1>Klik <a href='session.php'>";
    }
?>