<?php
// Membuat array 2 dimensi 3x3 berisi angka acak dari 1–9
$matriks = []; // inisialisasi array kosong

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9); // isi matriks dengan angka acak 1–9
    }
}

// Cetak array dalam bentuk matriks (tabel HTML)
echo "<b>Matriks 3x3:</b><br>";
echo "<table border='1' cellpadding='10' cellspacing='0' 
      style='border-collapse: collapse; text-align: center;'>";

$total = 0; // Variabel untuk menampung jumlah total semua elemen

for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $matriks[$i][$j] . "</td>";
        $total += $matriks[$i][$j]; // tambahkan ke total
    }
    echo "</tr>";
}

echo "</table>";

// Cetak total semua elemen
echo "<br><b>Jumlah total semua elemen: $total</b>";
?>



