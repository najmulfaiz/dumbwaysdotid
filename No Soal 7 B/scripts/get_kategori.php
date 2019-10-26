<?php 

header('Content-Type: Application/Json');

require '../db.php';

$query = 'SELECT * FROM categories';
$proses = $conn->query($query);
$data = $proses->fetch_all(MYSQLI_ASSOC);

die(json_encode($data));