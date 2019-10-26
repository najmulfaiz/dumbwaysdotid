<?php 

function cetak_gambar($panjang) {
    if($panjang % 2 == 0) {
        echo 'Panjang harus angka ganjil';
        die();
    }

    echo ' --- panjang --- <br/>';

    for($x = 1; $x <= $panjang; $x++) {
        for($y = 1; $y <= $panjang; $y++) {
            if($x % 2) {
                echo " * ";
            } else {
                if($y == 1 || $y == $panjang) {
                    echo " * ";
                } else {
                    echo " = ";
                }
            }
        }
        echo '<br/>';
    }
}

cetak_gambar(5);