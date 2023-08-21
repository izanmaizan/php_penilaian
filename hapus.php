<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $nim = $_GET['nim'];
    include "koneksi.php";
    $del = mysqli_query($kon, "DELETE FROM mhs WHERE nim = $nim");
    if ($del) {
        echo "Data dengan NIM $nim Berhasil Dihapus";
    } else {
        echo "Gagal Hapus";
    }
    ?>

    <meta http-equiv="refresh" content="1" url="index.php">
</body>

</html>