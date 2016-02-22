<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('.env');

$bpm = $_GET['bpm'];

$ch_echonest = curl_init('http://developer.echonest.com/api/v4/song/search?api_key=' . ECHONEST_API . '&max_tempo=' . $bpm . '&min_tempo=' . $bpm);
curl_setopt($ch_echonest, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_echonest, CURLOPT_HEADER, 0);
$data['echonest'] = json_decode(curl_exec($ch_echonest));
curl_close($ch_echonest);

var_dump($data);

?>
