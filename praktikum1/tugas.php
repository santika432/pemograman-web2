<?php 
$mahasiswa1 =[
    'id'=> 1,
    'nim'=>0110122045,
    'nama'=>"santika",
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,

];
$mahasiswa2 =[
    'id'=> 2,
    'nim'=>0110122043,
    'nama'=>"sintia",
    'uts'=>90,
    'uas'=>90,
    'tugas'=>95,

];
$mahasiswa3 =[
    'id'=> 3,
    'nim'=>0110123222,
    'nama'=>"larasati",
    'uts'=>85,
    'uas'=>85,
    'tugas'=>95,

];

$ar_nilai =[$mahasiswa1, $mahasiswa2, $mahasiswa3];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h3>Daftar nilai mahasiswa</h3>
        <table class="table table-stripped">
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>nim</th>
            <th>uts</th>
            <th>uas</th>
            <th>tugas</th>
        </tr>
        <?php foreach($ar_nilai as $nilai){?>
        <tr>
            <td><?= $nilai ['id']; ?></td>
            <td><?= $nilai ['nama']; ?></td>
            <td><?= $nilai ['nim']; ?></td>
            <td><?= $nilai ['uts']; ?></td>
            <td><?= $nilai ['uas']; ?></td>
            <td><?= $nilai ['tugas']; ?></td>
        </tr>
        <?php }?>
        </table>
        
    </div>
</body>
</html>