<?php
$access_token = 'ATjXUIXcjN9ptk0riWqbtyGg5xt+4J0mJREwgkidsBLzWMrSe5JbNsRBCmdnR+UNKH2/+6AitgoypC8/pA1v1XVG7UjO46141E0gh5RrhLm7aF9h5sT2+81KRnWwBaP9sUQW9Sodxq6heOgm2KOeiwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);

echo $result;