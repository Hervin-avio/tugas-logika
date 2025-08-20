<?php

function getGrade(int $nilai): string {
    if ($nilai >= 0 && $nilai <= 49) {
        return "E";
    } elseif ($nilai >= 50 && $nilai <= 59) {
        return "D";
    } elseif ($nilai >= 60 && $nilai <= 74) {
        return "C";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        return "B";
    } elseif ($nilai >= 85 && $nilai <= 100) {
        return "A";
    } else {
        return "Nilai tidak valid";
    }
}

echo "Masukkan nilai: ";
$nilai = (int) trim(fgets(STDIN));

$hasil = getGrade($nilai);

echo "Grade: $hasil\n";
