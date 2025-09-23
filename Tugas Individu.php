<?php
echo "<h3>1. String angka bisa dijumlah?</h3>";
$a = "10"; // string numerik
$b = "20"; // string numerik
$hasil = $a + $b;
echo "a = \"$a\" (string), b = \"$b\" (string)<br>";
echo "a + b = $hasil (PHP otomatis mengubah string ke integer)<br><br>";

echo "<h3>2. Perbedaan operator / dan %</h3>";
$x = 10;
$y = 3;
echo "Hasil $x / $y = " . ($x / $y) . "<br>";   // hasil bagi
echo "Hasil $x % $y = " . ($x % $y) . "<br><br>"; // sisa bagi

echo "<h3>3. Menggabungkan string tugas1 dan tugas2 jadi 9080</h3>";
$tugas1 = "90";
$tugas2 = "80";
$gabung = $tugas1 . $tugas2; // menggunakan operator titik (.)
echo "tugas1 = $tugas1<br>";
echo "tugas2 = $tugas2<br>";
echo "Hasil gabungan = $gabung<br><br>";

echo "<h3>4. Perbedaan Single Quoted vs Double Quoted</h3>";
$string1 = 'Ini adalah string sederhana';
$string2 = 'Ini adalah
string yang bisa
memiliki beberapa
baris';
$string3 = 'Dia berkata: "I\'ll be back"';
$string4 = 'Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string5 = 'Kalimat ini tidak akan pindah ke: \n baris baru';
$string6 = 'Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

echo "Contoh Single Quoted:<br>";
echo $string1 . "<br>";
echo $string2 . "<br>";
echo $string3 . "<br>";
echo $string4 . "<br>";
echo $string5 . "<br>";
echo $string6 . "<br><br>";

echo "Contoh Double Quoted:<br>";
$string7 = "Kalimat ini akan pindah ke baris baru:\nBaris kedua";
$string8 = "Nilai variabel tugas1 = $tugas1 dan tugas2 = $tugas2";
echo nl2br($string7) . "<br>"; // nl2br agar \n bisa ditampilkan di HTML
echo $string8 . "<br>";
?>
