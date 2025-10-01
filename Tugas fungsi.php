<?php
// 1. Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan
$angka1 = 100;
$angka2 = 150;
echo "Bilangan terbesar dari $angka1 dan $angka2 adalah: " . bilanganTerbesar($angka1, $angka2);
echo "<br><br>";

// 2. Tampilkan Tanggal, bulan dan Tahun sekarang dengan fungsi getdate()
$tanggal = getdate();
echo "Tanggal sekarang (menggunakan getdate) : ";
echo $tanggal['mday'] . "-" . $tanggal['mon'] . "-" . $tanggal['year'];
echo "<br><br>";

// 3. Tampilkan Tanggal, bulan dan Tahun sekarang dengan fungsi date('d-F-Y')
echo "Tanggal sekarang (menggunakan date) : " . date("d-F-Y");
?>
