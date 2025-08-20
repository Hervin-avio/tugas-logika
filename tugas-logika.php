<?php

echo "Masukkan nilai: ";
$nilai = (int) trim(fgets(STDIN)); // ambil input user dan cast jadi integer

if ($nilai >= 0 && $nilai <= 49) {
    echo "E\n";
} elseif ($nilai >= 50 && $nilai <= 59) {
    echo "D\n";
} elseif ($nilai >= 60 && $nilai <= 74) {
    echo "C\n";
} elseif ($nilai >= 75 && $nilai <= 84) {
    echo "B\n";
} elseif ($nilai >= 85 && $nilai <= 100) {
    echo "A\n";
} else {
    echo "Nilai tidak valid\n";
}
