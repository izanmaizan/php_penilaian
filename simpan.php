<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $nim = $_POST['nim'];
    $nm = $_POST['nm'];
    $mk = $_POST['mk'];
    $quiz = $_POST['quiz'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $nr = ($quiz + $uts + $uas) / 3;
    if ($nr > 59) {
        $ket = "LULUS";
    } else {
        $ket = "TIDAK LULUS";
    }

    include "koneksi.php";
    mysqli_query($kon, "INSERT INTO mhs VALUES ('$nim', '$nm','$mk','$quiz','$uts','$uas', '$nr', '$ket')");
    ?>

    <meta http-equiv="refresh" content="0;url=index.php">

</body>

</html>