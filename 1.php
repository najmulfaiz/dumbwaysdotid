<?php

header('Content-type: Application/Json');

function check($dataKey, $word) {
    $res = [];
    
    foreach($dataKey as $key) {
        $res[] = [
            $key => strpos($word, $key) !== false ? true : false
        ];
    }

    return $res;
}

$dataKey = ['dumb', 'ways', 'the', 'best'];
$word = 'dumbways';

echo json_encode(check($dataKey, $word));