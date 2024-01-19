<?php
function ubahwaktu($waktu) {
    $jam = substr($waktu, 0, 2);
    $menit = substr($waktu, 3, 2);
    $format = "AM";
    if ($jam >= 12) {
        $format = "PM";
        if ($jam > 12) {
            $jam = $jam - 12;
        }
    }
    return "$jam:$menit $format";
}
$waktu1 = "19:00";
$waktu2 = "23:45";
$waktu3 = "08:55";
$waktu_diubah1 = ubahwaktu($waktu1);
$waktu_diubah2 = ubahwaktu($waktu2);
$waktu_diubah3 = ubahwaktu($waktu3);
echo "Waktu awal: $waktu1, Waktu abis diubah: $waktu_diubah1<br>";
echo "Waktu awal: $waktu2, Waktu abis diubah: $waktu_diubah2<br>";
echo "Waktu awal: $waktu3, Waktu abis diubah: $waktu_diubah3<br>";
?>
