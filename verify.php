<?php
$access_token = 'KqaXcjYLxYHj9vs1tTfGE1BnvJ6fjR19FLEssxF7JKtvRd5NtNudwBM+z1kUYJ9tbZpMrfb+u1fj2Rvf7myL4xhTyPyMAhQGm0LRAOmggw0xsP8gT6eVMOxnN+r7LWVVV5AkusrpCCBLLDZ862LFWQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;