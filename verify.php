<?php
$access_token = 'r21KrzNH0w2z6A6WxqvjXD97vN/7PRG3QfEqpvcNYyHFUZpSumySRKHCCHpkUlErWs9JNHL6EkevUuWVXGdY3yDWrXIl92k99Kx51QDtkwD1TgDRZUuag58GI9WdQ+kRA+Lj9YEYTnCTvLiW0X6jYgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
