<?php 
$array = [1,2,3,4,5];

echo "$array[3]";
echo "<br><pre>";
print_r($array);
echo "</pre>";

$tinggiBadan = ["syafiq" => 165,"ibrahim" => 166];
$tinggiBadan['Ahmet'] = 167;
$tinggiBadan['mehmet'] = 168;

echo "<br><pre>";
print_r($tinggiBadan);
echo "</pre>";

foreach ($tinggiBadan as $key => $value) {
    echo "Nama: $key Tinggi badan: $value <br><br>";
}

/*
**array function//
*/
$warna = [1,2,3,4,5];

$warna[0] = "Hijau";
$warna[2] = "Hijau";
print_r($warna);

echo "<br>";
//menghitung total data di array
echo count($warna);
//menambahkan  data di akhir array
array_push($warna,"merah","kuning");
print_r($warna);
echo "<br>";
//mengeck apakahb ada spesifik data di array
var_dump(in_array("Hijau",$warna));
echo "<br>";

//mengambil data terakhir di array
$akhir = array_pop($warna);
print_r($warna);
echo "<br>";
echo "$akhir";
?>