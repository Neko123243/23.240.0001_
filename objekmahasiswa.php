<?php
    require_once "mahasiswa.php";
    
    $mahasiswa1 = new mahasiswa("Muhreza Baidhowi","23.240.0001","3P41", 3.15);

    $mahasiswa1->nama = "Muhreza Baidhowi";
    $mahasiswa1->nim = "23.240.0001";
    $mahasiswa1->kelas = "3P41";
 

    echo "NAMA : $mahasiswa1->nama <br>";
    echo "NIM : $mahasiswa1->nim <br>";
    echo "KELAS : $mahasiswa1->kelas <br>";
    
    echo $mahasiswa1->infomahasiswa();
    echo "<br>";
?>