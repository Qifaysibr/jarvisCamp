<?php 
echo "Hello World!<br>";

$nama = "Syafiq";

echo "nama saya $nama <br>";
echo 'nama saya '.$nama; //dalam petik satu tidak bisa memanggil variabel

echo 1234;
echo "Kelas saya R2Z <br>";

$array = ['Syafiq', 'Ibrahim', 'Siapa'];

echo $array[1];

echo "<br>";
$array2 = [
    "nama" => "Syafiq",
    "alamat" => "Bekasi"
];
echo $array2["alamat"]
?>