<?php
function Menghitung_waktuKerja($jamKerja, $istirahatShalat, $istirahatMakan) {
    $totalIstirahat = $istirahatShalat + $istirahatMakan;
    $waktuKerjapegawai = $jamKerja - $totalIstirahat;
    return $waktuKerjapegawai;
}
$jamKerjaPerHari = 480; 
$istirahatShalat = 20;
$istirahatMakan = 30;
$waktuKerjapegawai = Menghitung_waktuKerja($jamKerjaPerHari, $istirahatShalat, $istirahatMakan);
echo "Jam Kerja pegawai: " . floor($waktuKerjapegawai / 60) . " jam " . ($waktuKerjapegawai % 60) . " menit";
?>
