<?php 

header('Content-Type: Application/Json');

require '../db.php';

$query = 'UPDATE categories SET name = "' . $_POST['name'] . '" WHERE id = "' . $_POST['id'] . '"';

if($conn->query($query)) {
    $res = [
        'success' => true,
        'message' => 'Update Berhasil',
    ];
} else {
    $res = [
        'success' => false,
        'message' => 'Update Gagal',
    ];
}

die(json_encode($res));