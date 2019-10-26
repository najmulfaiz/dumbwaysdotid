<?php 

function hitung_kembalian($total_belanja, $jumlah_uang) {
    $cashback = 0;

    if($total_belanja > 200000) {
        $cashback = $total_belanja * (10/100);
    }

    $kembalian = ($jumlah_uang - $total_belanja) + $cashback;

    $kembalian_uang = [];
    
    $sisa = $kembalian;
    if($kembalian >= 50000) {
        $sisa = $kembalian % 50000;
        $jumlah = ($kembalian - $sisa) / 50000;

        $kembalian_uang[] = [
            'nominal' => '50000',
            'jumlah' => $jumlah,
        ];
    }

    $kembalian = $sisa;
    if($kembalian >= 20000) {
        $sisa = $kembalian % 20000;
        $jumlah = ($kembalian - $sisa) / 20000;

        $kembalian_uang[] = [
            'nominal' => '20000',
            'jumlah' => $jumlah,
        ];
    }

    $kembalian = $sisa;
    if($kembalian >= 10000) {
        $sisa = $kembalian % 10000;
        $jumlah = ($kembalian - $sisa) / 10000;

        $kembalian_uang[] = [
            'nominal' => '10000',
            'jumlah' => $jumlah,
        ];
    }

    $kembalian = $sisa;
    if($kembalian >= 5000) {
        $sisa = $kembalian % 5000;
        $jumlah = ($kembalian - $sisa) / 5000;

        $kembalian_uang[] = [
            'nominal' => '5000',
            'jumlah' => $jumlah,
        ];
    }

    return [
        'sisa' => $sisa,
        'kembalian' => $kembalian_uang,
    ];
}

$kembalian = hitung_kembalian(220000, 250000);

?>

<ul>
    <?php
    if(!empty($kembalian['kembalian'])) {
        foreach($kembalian['kembalian'] as $kem) {
            ?><li><?php echo $kem['jumlah'] . 'x' . $kem['nominal']; ?></li><?php
        }
    }
    
    if(!empty($kembalian['sisa'])) {
        ?><li><?php echo $kembalian['sisa'] . ' Disumbangkan karena tidak ada pecahan dibawah 5000'; ?></li><?php
    }
    ?>
</ul>