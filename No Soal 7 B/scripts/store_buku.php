<?php

require '../db.php';

$path = $_FILES['image']['name'];
$namaSementara  = $_FILES['image']['tmp_name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$dirUpload      = "../images/";
$filename = time() . '.' . $ext;
$terupload      = move_uploaded_file($namaSementara, $dirUpload . $filename);

$query = 'INSERT INTO books VALUES(DEFAULT, "' . $_POST['name'] . '", "' . $_POST['stok'] . '", "' . $filename . '", "' . $_POST['deskripsi'] . '", "' . $_POST['category_id'] . '")';

if($conn->query($query)) {
    ?>
    <script>
        alert('Simpan Berhasil');
        location.href = '../?page=buku';
    </script>
    <?php
} else {
    ?>
    <script>
        alert('Gagal Berhasil');
        location.href = '../?page=buku';
    </script>
    <?php
}