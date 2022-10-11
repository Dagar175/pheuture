<?php

$url = "http://localhost/formphp2/backend.php";

$ch = curl_init();

curl_setopt($ch , CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_URL,"https://google.com");
curl_setopt($ch,CURLOPT_URL,$url);

curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($_POST));
echo json_encode($_POST);
$result = curl_exec($ch);

echo $result;


?>