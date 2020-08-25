<?php
$access_token = 'WDxXRN6tBnXXcFdqVJ6v6Xk1aDse7pdVVLJVaVXULxXXyXw8I8+1b2Iorx5Cvr/AjQAk0IB6VqREqOrzdq55gcIRHaULkzqDh4A4HBWy1rlXssgCMgDSXYnF/16oHccjWLPwdW1GhblLelHH2xdfRwdB04t89/1O/w1cDnyilFU=';


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