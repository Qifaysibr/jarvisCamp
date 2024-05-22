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

$jeruk = new buah("Jeruk","Orange","Manis & Asam");
$jeruk->jatuh();



$apel = new buah("Apel","Merah","Manis");
$apel->jatuh();


$toyota = new mobil("toyota","silver");
$toyota->berjalan();


?>