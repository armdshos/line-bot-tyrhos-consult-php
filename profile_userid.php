<?php

$datas = file_get_contents('php://input');
$deCode = json_decode($datas,true);
$replyuserId = $deCode['events'][0]['userId'];
echo "userid = ".$replyuserId;
//echo "<hr>";

$access_token = '1ZpsWeHK7VrisXyxrFiozomC5j0EtQproAG3gvgB+P+kSRzDv2UmELxbF0yyIkofufGXB8KORv5qsL1jQzF6gP8iLyEw66gzvJe6Rk/Ur4dudD+INlPakngjTBK60V7A1CBCUk1ymMQrwh+a3mtQyAdB04t89/1O/w1cDnyilFU=';

$userId = $replyuserId;//'Ub9af2ecddba401128eb33559023cbf9a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

//echo $result;
