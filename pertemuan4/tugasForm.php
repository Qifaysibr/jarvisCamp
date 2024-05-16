<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tugas Form</title>
</head>

<body>
    <div class="container my-5">
        <h1>Form Produk</h1>

        <form action="dataProduk.php" method="POST">
            <div class="form-group row">
                <label for="barang" class="col-4 col-form-label">Nama Barang :</label>
                <div class="col-8">
                    <input id="barang" name="barang" placeholder="Masukkan nama barang" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-4 col-form-label">Harga :</label>
                <div class="col-8">
                    <input id="harga" name="harga" placeholder="Masukkan harga barang" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                    <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok :</label>
                <div class="col-8">
                    <input id="stok" name="stok" placeholder="Masukkan stok barang" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>