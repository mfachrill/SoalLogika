<?php
function cariPanjangSisi($luas) {
    $sisi = sqrt($luas);
    return $sisi;
}
$luasPersegi = 25;
$panjangSisi = cariPanjangSisi($luasPersegi);
echo "Luas persegi: " . $luasPersegi . " cm² <br>";
echo "Panjang sisi: " . $panjangSisi . " cm";
?>
