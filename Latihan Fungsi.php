<?php
// Membuat fungsi sederhana
function berhasil() {
    echo "SELAMAT ANDA BERHASIL";
}

function gagal() {
    echo "MAAF ANDA GAGAL";
}

$nilai = 90;
if ($nilai >= 75) {
    berhasil();
} else {
    gagal();
}

echo "<br><br>";

// Fungsi dengan parameter
function jumlah($a, $b) {
    return $a + $b;
}

echo "Hasil penjumlahan: " . jumlah(10, 15);
echo "<br><br>";

// Fungsi bawaan getdate()
$sekarang = getdate();
echo "Sekarang Tanggal: " . $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"];
?>
