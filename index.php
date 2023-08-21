<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
</head>

<body>
    <h1>Data Nilai Mahasiswa</h1>
    <a href="input.php">Input Kembali Nilai Mahasiswa</a>
    <br>
    <?php
    $date = date("1, d F Y, H:i:s");
    include "koneksi.php";
    $tampil = mysqli_query($kon, "SELECT * FROM mhs");
    $jumlah = mysqli_num_rows($tampil);
    echo "<pre>";
    echo "Tanggal dan Waktu  : $date <br>";
    echo "Jumlah Record = $jumlah mahasiswa<br>";
    ?>
    <table border="1">
        <tr align="center">
            <td>NIM</td>
            <td>Nama</td>
            <td>MataKuliah</td>
            <td>Nilai QUIZ</td>
            <td>Nilai UTS</td>
            <td>Nilai UAS</td>
            <td>Nilai rata-rata</td>
            <td>Keterangan</td>
            <td>Hapus</td>
        </tr>
        <?php
        while ($data = mysqli_fetch_array($tampil)) {
            $nim = $data['nim'];
            $nm = $data['nama'];
            $mk = $data['nama_matkul'];
            $quiz = $data['quiz'];
            $uts = $data['uts'];
            $uas = $data['uas'];
            $r = $data['rata'];
            $k = $data['ket'];
            echo "
            <tr>
                <td>$nim</td>
                <td>$nm</td>
                <td>$mk</td>
                <td>$quiz</td>
                <td>$uts</td>
                <td>$uas</td>
                <td>$r</td>
                <td>$k</td>
                <td>
                    <a href=hapus.php?nim$nim>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>

</html>