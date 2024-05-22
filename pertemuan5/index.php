<?php 

class buah {
    public $nama;
    public $warna;
    public $rasa;
    
    public function jatuh()
    {
        echo "$this->nama jatuh";
    }
}

class mobil
{
    public $warna;
    public $merek;

    public function berjalan()
    {
        echo "mobil $this->merek berjalan \n";
    }
    public function mengerem()
    {
        echo "mobil $this->merek mengerem \n";
    }
}

$jeruk = new buah();
$jeruk->jatuh();
$jeruk->nama = "Jeruk";
$jeruk->warna = "Orange";
$jeruk->rasa = "Manis & Asam";

$apel = new buah();
$apel->jatuh();
$apel->nama = "Apel";
$apel->warna = "Merah";
$apel->rasa = "Manis";

$toyota = new mobil();
$toyota->merek = "toyota";
$toyota->warna = "silver";


?>