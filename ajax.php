<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('.env');

$bpm = $_GET['bpm'];

$ch = curl_init('http://developer.echonest.com/api/v4/song/search?api_key=' . ECHONEST_API . '&max_tempo=' . $bpm . '&min_tempo=' . $bpm);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
curl_close($ch);

echo "<pre>";
var_dump($data);
echo "</pre>";

?>
