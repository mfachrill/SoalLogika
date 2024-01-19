<?php
$bilangan1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bilangan2 = [77, 99, 55, 81, 45, 90, 91, 98];
$kelompokawal = array_intersect($bilangan1, $bilangan2);
$kelompokdua = array_merge(array_diff($bilangan1, $bilangan2), array_diff($bilangan2, $bilangan1));
echo "Kelompok Pertama: <br>";
print_r($kelompokawal);
echo"<br>";
echo "Kelompok Kedua: <br>";
print_r($kelompokdua);
?>
