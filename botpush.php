<?php



require "vendor/autoload.php";

$access_token = '1ZpsWeHK7VrisXyxrFiozomC5j0EtQproAG3gvgB+P+kSRzDv2UmELxbF0yyIkofufGXB8KORv5qsL1jQzF6gP8iLyEw66gzvJe6Rk/Ur4dudD+INlPakngjTBK60V7A1CBCUk1ymMQrwh+a3mtQyAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f6e76ab6a75e28bfe4d81c5a623c44d2';

$pushID = 'Ub9af2ecddba401128eb33559023cbf9a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดี ยินดีต้อนรับท่านสู่ ระบบปรึกษาทางการแพทย์ โรงพยาบาลธัญญารักษ์ ขอนแก่น');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







