<?php
function curlGetJpeg($img){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $img);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $jpg = curl_exec($curl);
    curl_close($curl);
    return $jpg;
}
function hexToByteArray($hex){
    $arr = str_split($hex, 2);
    return $arr;
}
function jpegHeaderSize($bytearr){
    $c = count($bytearr);
    for($i = 0; $i < $c; $i++){
        if($bytearr[$i] == 'ff' and $bytearr[$i+1] == 'da')
            break;
    }
    $hlen = $i + 11;
    return $hlen;
}
function corruptJpegBytes($bytearr){
    $hsize = jpegHeaderSize($bytearr);
    $c = count($bytearr);
    $max = rand(5, 50);
    for($j = 0; $j < $max; $j++){
        $byte = rand($hsize, $c);
        $val = '00';
        $bytearr[$byte] = $val;
    }
    $hex = implode($bytearr);
    return $hex;
}