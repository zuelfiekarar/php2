<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Semester 2</title>
</head>

<body>
    <?php
    include("koneksi.php");
    $sql= "select * from mahasiswa order by nama";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <h1>Nama: <?= $sql['nama']?> </h1>
    <h1>NIM: <?= $sql['nim']?></h1>
</body>

</html>