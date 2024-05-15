<?php 
$nilai1 = 5;
$nilai2 = '5';

if($nilai1 == $nilai2) {
    echo "Niali 1 sama dengan nilai2";
} else {
    echo "Jawaban tidak diketahui";
}

echo"<br>";

if($nilai1 === $nilai2) {
    echo "Niali 1 sama dengan nilai2";
} else {
    echo "Jawaban tidak diketahui";
}

echo"<br>";

$nilai1 = 5; //variable bisa dideklarasi ulang  
$nilai2 = 8;
if($nilai1 < $nilai2) {
    echo "nilai 1 lebih kecil dari nilai 2";
} elseif ($nilai1 > $nilai2) {
    echo "Nilai 1 lebih besar dari nilai 2";
} else {
    echo "Jawaban Tidak diketahui";
}
//jika satu kondisi terpeuhi maka kondisi selanjutnya tidak dice lagi

echo"<br>";

$day = date('D');// D (uppercase => kita bisa menggunakan echo secara langsung maupun mereturn value nya)
echo "Hari ini adalah $day. <br>";
if ($day == "Sat") {
echo "Kelas Jarvis akan dimulai!";
} elseif ($day == "Sun") {
    echo "Kelas Jarvis akan dimulai!";
    } elseif ($day == "Mon"||$day == "Tue"||$day == "Wed"||$day == "Thu"||$day == "Fri") {
        echo "Kelas Jarvis Libur!";
        }
?>