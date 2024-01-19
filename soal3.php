<?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];
$kelompok_pertama = []; 
$kelompok_kedua = [];   
foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kelompok_pertama[] = $nilai;
    } else {
        $kelompok_kedua[] = $nilai;
    }
}
echo "Kelompok Pertama (Kompeten): " . implode(', ', $kelompok_pertama) . "<br>";
echo "Kelompok Kedua (Belum Kompeten): " . implode(', ', $kelompok_kedua) . "<br>";
?>