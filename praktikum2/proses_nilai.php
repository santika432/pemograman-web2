<?php 
// Mengambil data input 
$nama = $_GET ['nama'];
$matakul = $_GET ['Matakul'];
$tugas = $_GET ['tugas'];
$uts = $_GET ['uts'];
$uas = $_GET ['uas'];
$total_nilai = ($tugas + $uts + $uas ) / 3;

if($total_nilai > 75 ){
    $keterangan ="lulus";
} else { 
    $keterangan ="Tidak lulus";
}



?>