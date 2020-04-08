<?php
$accessToken = "1ZpsWeHK7VrisXyxrFiozomC5j0EtQproAG3gvgB+P+kSRzDv2UmELxbF0yyIkofufGXB8KORv5qsL1jQzF6gP8iLyEw66gzvJe6Rk/Ur4dudD+INlPakngjTBK60V7A1CBCUk1ymMQrwh+a3mtQyAdB04t89/1O/w1cDnyilFU=";
   //$content = file_get_contents('php://input');
   //$arrayJson = json_decode($content, true);
   $arrayHeader = array();
   $arrayHeader[] = "Content-Type: application/json";
   $arrayHeader[] = "Authorization: Bearer {$accessToken}";
   //รับข้อความจากผู้ใช้
   $message = 'สวัสดี';//$arrayJson['events'][0]['message']['text'];
   //รับ id ของผู้ใช้
   $id = 'Ub9af2ecddba401128eb33559023cbf9a';//$arrayJson['events'][0]['source']['userId'];
   #ตัวอย่าง Message Type "Text + Sticker"
   //if($message == "สวัสดี"){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "สวัสดีครับ ";
      $arrayPostData['messages'][1]['type'] = "sticker";
      $arrayPostData['messages'][1]['packageId'] = "2";
      $arrayPostData['messages'][1]['stickerId'] = "37";
      pushMsg($arrayHeader,$arrayPostData);
   //}
   function pushMsg($arrayHeader,$arrayPostData){
      $strUrl = "https://api.line.me/v2/bot/message/push";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$strUrl);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close ($ch);
   }
   exit;

?>
