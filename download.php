<?php

$url = $_GET['url'];

header("Content-Disposition: attachment; filename=playlist.m3u");
header("Content-Type: application/octet-stream");

echo file_get_contents($url);

?>