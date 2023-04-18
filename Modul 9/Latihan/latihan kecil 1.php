<!DOCTYPE html>
<html>

    <head>
        <title>Metode REQUEST</title>
    </head>

<body>
    <!-- Form HTML -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> Nama
        <input type="text" name="nama" /> <br/>

        <input type="submit" value="OK" />
    </form>

<!-- Metode Request PHP -->
<?php
if (isset($_REQUEST['nama'])) {
    echo 'Hello, ' . $_REQUEST['nama'];
}

?>

</body>
</html>