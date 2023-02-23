<?php 
//ini sebuah komentar
/* ini juga sebuah komentar*/
#in komentar pake fress

// echo " Hellow word <br>";
// echo 'hellow word <br>';
// print_r("santika sintia <br> ");
// var_dump("STT Nurul Fikri");

//membuat variabel user 
// $nama ="Adam malik";
// $umur =18;
// $berat= 70.2;
// $mahawiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "umur saya $umur <br>";
// echo "berat badan saya mencapai $berat <br> kg";


//membuat variabel sistem
// echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
// echo"<br>";
// echo 'Nama File '.$_SERVER ["PHP_SELF"];
// echo "<br>";
// //membuat variabel konstanta
// define("PHI",3.14);
// $jari =10;
// $luas =PHI*$jari*$jari;
// $keliling = 2*PHI*$jari;

// echo " luas lingkaran dengan jari-jari $jari = $luas";
// echo "<br>";
// echo " keliling lingkaran denngan jari-jari $jari =$keliling ";


//membuat array
$programs = ["PHP","Javascript", "HTML","CSS"];
echo $programs[0];
echo "jumlah data variabel programs sebanyak ".count($programs);
foreach($programs as $programs){
    echo "Bahasa $programs <br>";
}


?>