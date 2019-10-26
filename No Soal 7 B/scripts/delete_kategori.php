<?php 

header('Content-Type: Application/Json');

require '../db.php';

$query = 'DELETE FROM categories WHERE id = "' . $_POST['id'] . '"';

if($conn->query($query)) {
    $res = [
        'success' => true,
        'message' => 'Hapus Berhasil',
    ];
} else {
    $res = [
        'success' => false,
        'message' => 'Hapus Gagal',
    ];
}

die(json_encode($res));