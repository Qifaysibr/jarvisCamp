<?php 
$buah = [
    ["nama" => "apel","warna" => "merah"],
    ["nama" => "mangga","warna" => "hijau"],
    ["nama" => "pisang","warna" => "kuning"],
    ["nama" => "durian","warna" => "kuning"],
    ["nama" => "jeruk","warna" => "orange"],
    ];
    ?>
<table border= "2">
    <tr>
        <th>Nama</th>
        <th>Warna</th>
    </tr>
    <?php foreach ($buah as $fruit ) {?>
        <tr>
        <td><?php echo $fruit['nama'] ?></td>
        <td><?php echo $fruit['warna'] ?></td>
        </tr>
   <?php }?>
</table>
