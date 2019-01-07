<?php 
$nama = "Ain"; 
$kelas = "XIRPL2";
$alamat = " Danau Kerinci";
function tampil_nama() {  
    global $nama;
    global $kelas;
    global $alamat;
    echo "Nama Saya : ".$nama; 
    echo "<br>";
    echo "Saya dari kelas ".$kelas; 
    echo "<br>";
    echo "Alamat saya di ".$alamat; 
    echo "<br>";
} 
    tampil_nama();
     ?> 