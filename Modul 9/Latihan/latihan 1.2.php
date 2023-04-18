<!DOCTYPE html>
<html>

    <head>
        <title>Metode POST</title>
    </head>

<body>

    <!-- Form HTML -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> Nama
        <input type="text" name="nama" /> <br/>

        <input type="submit" value="OK" />
    </form>

<!-- Metode Post PHP -->
<?php
if (isset($_POST['nama'])) {
    echo 'Hello, ' . $_POST['nama'];
}

?>

</body>
</html>