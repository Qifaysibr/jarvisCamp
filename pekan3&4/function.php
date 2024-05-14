<?php 
function salam($nama,$kegiatan) {
    return "Assalamualaikum Warahmatullahi wa barakatuh, Selamat Pagi $nama <br> Saya Sedang $kegiatan<br>";
}

echo salam("Syafiq","ngoding");
echo salam("Ibrahim","tidur");

function salamEcho($nama,$kegiatan) {
    echo "Assalamualaikum Warahmatullahi wa barakatuh, Selamat Pagi $nama <br> Saya Sedang $kegiatan<br>";
}

 salamEcho("Syafiq","ngoding"); //gk perlu pake echo lagi sebelum pemanggilan function
 salamEcho("Ibrahim","tidur");

function FunctionName() : Returntype {
    
}
?>