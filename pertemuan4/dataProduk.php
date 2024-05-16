<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <?php 
        $products = [ ["barang" => "Printer", "harga" => 1200000, "deskripsi" => "Printer merk HP", "stok" => 15], 
                      ["barang" =>"Tablet","harga" => 2000000, "deskripsi" => "Tablet merk Samsung", "stok" => 8], 
                      ["barang" => "Mouse", "harga" => 150000, "deskripsi" =>"Mouse merk Logitech", "stok" => 50], 
                      ["barang" => "Speaker", "harga" => 500000, "deskripsi" => "Speaker merk JBL", "stok" =>25], 
                      ["barang" => "Headset", "harga" => 250000, "deskripsi" => "Headset merk Sony", "stok" => 30]
              ];

        $newProduct = [
                      "barang" => $_POST['barang'],
                      "harga" => $_POST['harga'],
                      "deskripsi" => $_POST['deskripsi'],
                      "stok" => $_POST['stok']
        ];
                    
        $products[] = $newProduct;

        if($_SERVER['REQUEST_METHOD']=="POST") {
            ?>
          
            <!-- bootstrap -->
            <h1>Tabel Produk</h1>
            <table class="table table-hover table-dark">
          <thead>
            <tr>
              <!-- <th scope="col">No</th> -->
              <th scope="col">Nama Barang</th>
              <th scope="col">Harga</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Stok</th>
            </tr>
          </thead>
          
          <tbody>
          <?php foreach ($products as $barang ) {?>
        <tr>
        <td><?php echo $barang['barang'] ?></td>
        <td><?php echo $barang['harga'] ?></td>
        <td><?php echo $barang['deskripsi'] ?></td>
        <td><?php echo $barang['stok'] ?></td>
        </tr>
   <?php }?>
          </tbody>
        </table>
        <?php 
        } else {
            header('Location: tugasForm.php');
        }
        ?>
        
    </div>
    
</body>
</html>