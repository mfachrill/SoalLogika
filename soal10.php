<?php
$a = 9;
echo "Suku pertama sampai suku ke-12:\n";
for ($n = 1; $n <= 12; $n++) {
    $result = $a * 4 + $n * 3;
    echo "Suku ke-$n: $result<br>";
}
?>
