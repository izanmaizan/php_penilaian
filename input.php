<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
</head>

<body>
    <pre>
        <h1>Input Nilai Mahasiswa</h1>
        <form action="simpan.php" method="post" name="op">
            Nim         : <input type="text" name="nim"><br>
            Nama        : <input type="text" name="nm"><br>
            Matkul      : <input type="text" name="mk"><br>
            Nilai QUIZ  : <input type="text" name="quiz"><br>
            Nilai UTS   : <input type="text" name="uts"><br>
            Nilai UAS   : <input type="text" name="uas"><br>
            <input type="submit" name="submit" value="SIMPAN">
            <input type="reset" value="BATAL" name="reset">
        </form>
    </pre>
</body>

</html>