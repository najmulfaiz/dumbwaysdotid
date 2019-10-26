<?php 

header('Content-Type: Application/Json');

require '../db.php';

$query = 'INSERT INTO categories VALUES(DEFAULT, "' . $_POST['name'] . '")';

if($conn->query($query)) {
    $res = [
        'success' => true,
        'message' => 'Simpan Berhasil',
    ];
} else {
    $res = [
        'success' => false,
        'message' => 'Simpan Gagal',
    ];
}

die(json_encode($res));