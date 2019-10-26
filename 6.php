<?php

header('Content-Type: Application/Json');

function sort_array($array) {
    $res = [];

    foreach($array as $arr) {
        for($x = 1; $x < count($arr); $x++) {
            for($y = $x; $y > 0; $y--) {
                if($arr[$y] < $arr[$y-1]) {
                    $temp = $arr[$y];
                    $arr[$y] = $arr[$y-1];
                    $arr[$y-1] = $temp;
                }
            }
        }

        $res[] = $arr;
    }

    for($i = 1; $i < count($res); $i++) {
        for($j = $i; $j > 0; $j--) {
            if(count($res[$j]) < count($res[$j-1])) {
                $temp = $res[$j];
                $res[$j] = $res[$j-1];
                $res[$j-1] = $temp;
            }
        }
    }

    return $res;
}

$data = [
    ['g', 'h', 'i', 'j'],
    ['a', 'c', 'b', 'e', 'd'],
    ['g', 'e', 'f'],
];

echo json_encode(sort_array($data));