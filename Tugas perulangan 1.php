<?php
echo "<h2>PERULANGAN DARI 100 SAMPAI 1000</h2>";

/* 1. PERULANGAN FOR */
echo "<h3>1. Menggunakan FOR</h3>";
for($i=100; $i<=1000; $i++) {
    echo $i." ";
    if($i % 20 == 0) { // agar rapi, pindah baris tiap 20 angka
        echo "<br>";
    }
}

echo "<hr>";

/* 2. PERULANGAN WHILE */
echo "<h3>2. Menggunakan WHILE</h3>";
$j = 100;
while($j <= 1000) {
    echo $j." ";
    if($j % 20 == 0) {
        echo "<br>";
    }
    $j++;
}

echo "<hr>";

/* 3. PERULANGAN DO-WHILE */
echo "<h3>3. Menggunakan DO-WHILE</h3>";
$k = 100;
do {
    echo $k." ";
    if($k % 20 == 0) {
        echo "<br>";
    }
    $k++;
} while($k <= 1000);

echo "<hr>";

/* 4. PERULANGAN FOREACH */
echo "<h3>4. Menggunakan FOREACH</h3>";
// Buat array dari 100 sampai 1000
$angka = range(100, 1000); 
foreach($angka as $index => $value) {
    echo $value." ";
    if($value % 20 == 0) {
        echo "<br>";
    }
}
?>

