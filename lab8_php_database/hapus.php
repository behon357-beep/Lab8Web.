<?php

include_once 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM data_barang
WHERE id_barang = '$id'";

$result = mysqli_query($conn, $sql);

header('location: index.php');

?>
<td>
    <a href="ubah.php?id=<?= $row['id_barang']; ?>">
        Ubah
    </a>

    |

    <a href="hapus.php?id=<?= $row['id_barang']; ?>"
       onclick="return confirm('Yakin ingin menghapus?')">
        Hapus
    </a>
</td>