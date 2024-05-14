<?php 
//menampilkan ganjil
function showGanjil($a1,$a2) {
    if ($a1 % 2 != 0) {
        echo "$a1 adalah angka ganjil";
    } else {
        echo "$a2 adalah angka ganjil";
    }
};

showGanjil(6,7);

echo"<br>";

//menampilkan genap
function showGenap($a1,$a2) {
    if ($a1 % 2 != 1) {
        echo "$a1 adalah angka genap";
    } else {
        echo "$a2 adalah angka genap";
    }
}

showGenap(6,7);

echo"<br>";
//aritmatika


function tambah($a1,$a2) {
    echo "$a1 + $a2 = ".$a1+$a2;
}

tambah(100,5);
echo"<br>";

function kurang($a1,$a2) {
    echo "$a1 - $a2 = ".$a1-$a2;
}

kurang(100,5);
echo"<br>";

function kali($a1,$a2) {
    echo "$a1 * $a2 = ".$a1*$a2;
}

kali(100,5);
echo"<br>";

function bagi($a1,$a2) {
    echo "$a1 / $a2 = ".$a1/$a2;
}

bagi(100,5);

?>