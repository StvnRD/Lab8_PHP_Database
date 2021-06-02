<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php  
    include 'koneksi.php';
    ?>
</head>
<body>
    <div class="container">
        <br/><br/><a href="index.php"><font color='white'>Kembali</font></a>
        <h2>Tambah Barang</h2>
        <hr>
        <div class="main">
        <form method="post" action="tambah_barang.php" enctype="multipart/form-data">
            <div class="input">
                <label>Nama Barang</label>
                <input type="text" name="nama">
            </div>
            <div class="input">
                <label>Kategori</label>
                <input type="text" name="kategori">
            </div>
            <div class="input">
                <label>Harga Beli</label>
                <input type="text" name="harga_beli">
            </div>
            <div class="input">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual">
            </div>
            <div class="input">
                <label>Jumlah Stok</label>
                <input type="text" name="stok">
            </div>
            <div class="input">
                <label>Gambar</label>
                <input type="text" name="gambar">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="TAMBAH">
            </div>
        </form>
        </div>
    </div>
</body>
</html>
