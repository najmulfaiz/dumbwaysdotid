<?php 

header('Content-Type: Application/Json');

require '../db.php';

$query = 'SELECT * FROM categories';
$proses = $conn->query($query);
$data = $proses->fetch_all(MYSQLI_ASSOC);

$res = [];
foreach($data as $row) {
    $q = 'SELECT * FROM books WHERE id = "' . $row['id'] . '"';
    $p = $conn->query($q);
    
    $books = [];
    while($d = $p->fetch_assoc()):
        $books[] = $d;
    endwhile;

    $res[] = [
        'category' => $row['name'],
        'books' => $books,
    ];
}

die(json_encode($res));