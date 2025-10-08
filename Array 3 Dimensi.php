<?php
$array = [
    [ // Tabel 1
        ["elemen111", "elemen112", "elemen113"],
        ["elemen121", "elemen122", "elemen123"]
    ],
    [ // Tabel 2
        ["elemen211", "elemen212", "elemen213"],
        ["elemen221", "elemen222", "elemen223"]
    ]
];

// Contoh cara mengakses elemen:
echo $array[0][0][0]; // Output: elemen111
echo "<br>";
echo $array[1][1][2]; // Output: elemen223
?>
