<?php 

class Kendaraan
{
    public $warna;
    public $kapasitasMesin;

    public function __construct( $warna, $kapasitasMesin){
        $this->warna = $warna;
        $this->kapasitasMesin = $kapasitasMesin;
    }

    public function startEngine() {
        echo "Mesin  telah menyala\n";
    }

    public function turnOff() {
        echo "Mesin telah dimatikan\n";
    }
}

class Mobil extends Kendaraan
{
    public $merek;
    public $jumlahRoda;
    public $peruntukan;

    public function __construct($merek, $jumlahRoda, $peruntukan)
    {
        $this->merek = $merek;
        $this->jumlahRoda = $jumlahRoda;
        $this->peruntukan = $peruntukan;
    }


    public function tancapGas() {
        echo "Mobil ".$this->merek."akan berjalan\n";
    }
    
    public function injakRem()
    {
        echo "Mobil ".$this->merek."akan berhenti\n";
    }
}

$SU7 = new Mobil("Xiaomi SU7 ","4 roda", "Mobil penumpang");
$SU7->startEngine();
$SU7->tancapGas();
$SU7->injakRem();
$SU7->turnOff();

?>