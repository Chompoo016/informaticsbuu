<?php
$access_token = 'dkHnsN//Ljc9O7+vQSlaxDOdeb8hQYHMjZhRjD02we7CQgVdvetH2a5MtVKmMnZe/T1Lp/BSj2r+uxVEeKDIFFFdKBvgNwIgmyud/XwmmBWY408GhYvXNsj/49f5oP0K9jm+l7wXtQaEB2tXdwF6tQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
