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

$song = $data['echonest']->response->songs[0];
$query = urlencode($song->artist_name . ' ' . $song->title);

$ch_spotify = curl_init('https://api.spotify.com/v1/search?q=' . $query . '&type=track&limit=1');
curl_setopt($ch_spotify, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_spotify, CURLOPT_HEADER, 0);
$spotify = json_decode(curl_exec($ch_spotify));
curl_close($ch_spotify);

$data['spotify_link'] = $spotify->tracks->items[0]->external_urls->spotify

echo "<pre>";
echo "<h1>EchoNest</h1>";
var_dump($data);
echo "<h1>Spotify</h1>";
var_dump($spotify);
echo "</pre>";
?>
