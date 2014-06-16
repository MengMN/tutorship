<?php


function detectEncoding($str) {
    return mb_detect_encoding($str, array('UTF-8', 'CP936', 'BIG5', 'ASCII'));
}

function convert2gbk($str) {
    return convertEncoding($str, 'GBK');
}

function convert2utf8($str) {
    return convertEncoding($str, 'UTF-8');
}

function convertEncoding($str, $to_encoding) {
    if ($to_encoding !== ($from_encoding = detectEncoding($str))) {
        $str = mb_convert_encoding($str, $to_encoding, $from_encoding);
    }

    return $str;
}

function isWin() {
    return 'WIN' === strtoupper(substr(PHP_OS, 0, 3));
}