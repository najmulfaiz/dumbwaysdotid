<?php

function hitungVoucher($voucher, $belanja) {
    if($voucher == 'DumbWaysAsik' && $belanja >= 20000) {
        $diskon_pr = 50/100;
        $diskon_max = 20000;
    } else if($voucher == 'DumbWaysMantap' && $belanja >= 50000) {
        $diskon = 30/100;
        $diskon_max = 40000;
    } else {
        $diskon_pr = 0;
        $diskon_max = 0;
    }

    $diskon = $belanja * $diskon_pr;
    $diskon = $diskon <= $diskon_max ? $diskon : $diskon_max;
    $harus_dibayar = $belanja - $diskon;
    $kembalian = $belanja - $harus_dibayar;
    
    echo '<ul>
        <li>Uang yang harus dibayar : ' . $harus_dibayar . '</li>
        <li>Diskon : ' . $diskon . '</li>
        <li>Kembalian : ' . $kembalian . '</li>
    </ul>';
}

hitungVoucher('DumbWaysAsik', 30000);