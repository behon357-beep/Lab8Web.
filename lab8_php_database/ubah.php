
<?php

include_once 'koneksi.php';

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    $sql = "UPDATE data_barang SET
        nama = '$nama',
        kategori = '$kategori',
        harga_jual = '$harga_jual',
        harga_beli = '$harga_beli',
        stok = '$stok'
        WHERE id_barang = '$id'";

    $result = mysqli_query($conn, $sql);

    header('location: index.php');
    exit;
}

if (!isset($_GET['id'])) {
    die('ID barang tidak ditemukan.');
}

$id = $_GET['id'];

$sql = "SELECT * FROM data_barang
WHERE id_barang = '$id'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error: Data tidak tersedia');
}

$data = mysqli_fetch_array($result);

if (!$data) {
    die('Data barang tidak ditemukan.');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang</title>
</head>
<body>

<h1>Ubah Barang</h1>

<form method="post" action="ubah.php">

    <input type="hidden" name="id"
    value="<?php echo $data['id_barang']; ?>">

    <label>Nama Barang</label>
    <input type="text" name="nama"
    value="<?php echo $data['nama']; ?>">

    <br><br>

    <label>Kategori</label>
    <input type="text" name="kategori"
    value="<?php echo $data['kategori']; ?>">

    <br><br>

    <label>Harga Jual</label>
    <input type="text" name="harga_jual"
    value="<?php echo $data['harga_jual']; ?>">

    <br><br>

    <label>Harga Beli</label>
    <input type="text" name="harga_beli"
    value="<?php echo $data['harga_beli']; ?>">

    <br><br>

    <label>Stok</label>
    <input type="text" name="stok"
    value="<?php echo $data['stok']; ?>">

    <br><br>

    <input type="submit" name="submit" value="Simpan">

</form>

</body>
</html>
