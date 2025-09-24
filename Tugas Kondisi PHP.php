<?php
$user = "admin";
$pass = "1234";

if ($user == "admin" && $pass == "1234") {
    echo "Login berhasil, selamat datang admin!";
} else {
    echo "Login gagal, username atau password salah.";
}
echo '<br>';
?>

<?php
$nilai = 70;

if ($nilai >= 75) {
    echo "Selamat, kamu lulus!";
} else {
    echo "Maaf, kamu belum lulus.";
}
echo '<br>';
?>

<?php
$nilai = 85;

if ($nilai >= 90) {
    echo "Grade A";
} elseif ($nilai >= 80) {
    echo "Grade B";
} elseif ($nilai >= 70) {
    echo "Grade C";
} else {
    echo "Grade D";
}
echo '<br>';
?>

<?php
$hari = 3;

switch ($hari) {
    case 1: echo "Hari Senin"; break;
    case 2: echo "Hari Selasa"; break;
    case 3: echo "Hari Rabu"; break;
    case 4: echo "Hari Kamis"; break;
    case 5: echo "Hari Jumat"; break;
    case 6: echo "Hari Sabtu"; break;
    case 7: echo "Hari Minggu"; break;
    default: echo "Angka hari tidak valid";
}
echo '<br>';
?>

<?php
$total = 250000;

if ($total >= 500000) {
    $diskon = 0.2; // 20%
} elseif ($total >= 200000) {
    $diskon = 0.1; // 10%
} else {
    $diskon = 0;   // tidak ada diskon
}

$bayar = $total - ($total * $diskon);

echo "Total belanja: Rp$total<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total bayar: Rp$bayar";
echo '<br>';
?>
