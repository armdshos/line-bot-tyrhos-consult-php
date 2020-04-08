<?php
$access_token = '1ZpsWeHK7VrisXyxrFiozomC5j0EtQproAG3gvgB+P+kSRzDv2UmELxbF0yyIkofufGXB8KORv5qsL1jQzF6gP8iLyEw66gzvJe6Rk/Ur4dudD+INlPakngjTBK60V7A1CBCUk1ymMQrwh+a3mtQyAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
