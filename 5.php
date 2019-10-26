<?php 

function generate($jumlah) {
    $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $char_len = strlen($char);

    $res = [];
    for($x = 0; $x < $jumlah; $x++) {
        $random_string = '';
        for ($y = 0; $y < 4; $y++) {
            if($y != 0) {
                $random_string .= '-';
            }
            for($z = 0; $z < 4; $z++) {
                $random_string .= $char[rand(0, $char_len - 1)];
            }
        }
        $random_string;

        $res[] = $random_string;
    }

    return $res;
}

$keys = generate(3);

foreach($keys as $key) {
    echo $key . '<br />';
}