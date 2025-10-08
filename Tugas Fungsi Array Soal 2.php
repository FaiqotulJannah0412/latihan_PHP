<?php
// Membuat array 2 dimensi berisi data buah
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0];
echo "<br><br>";

// 2. Hitung total nilai (stok * harga) untuk semua buah
$total = 0;
foreach ($buah as $item) {
    $harga = $item[1];
    $stok = $item[2];
    $total += $harga * $stok;
}

echo "Total nilai semua buah (harga x stok): Rp " . number_format($total, 0, ',', '.');
?>
