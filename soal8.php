<?php
function Mengecek_Pembagian($angka, $pembagi) {
return $angka % $pembagi == 0;
}
function HasilPembagian($angka) {
$hasil = [];
if (Mengecek_Pembagian($angka, 3)) {  $hasil[] = 3;
    }
    if (Mengecek_Pembagian($angka, 5)) { $hasil[] = 5;
    }
    if(Mengecek_Pembagian($angka, 7))   {$hasil[] = 7;
    }
    if (Mengecek_Pembagian($angka, 10))  {$hasil[] = 10;
    }
    return $hasil;
}
$angka = 1000;
$hasil_pembagian = HasilPembagian($angka);
if (!empty($hasil_pembagian)) {
    echo "Angka $angka hanya bisa dibagi dengan angka " . implode(" dan ", $hasil_pembagian) . "<br>";
} else {
    echo "Angka $angka tidak bisa dibagi dengan 3, 5, 7, atau 10<br>";
}
?>
