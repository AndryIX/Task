<?php

$ch = curl_init();

$url = "http://my-json-server.typicode.com/AndryIX/Task/users";

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
]);

$response = curl_exec($ch);
curl_close($ch);

$obj_response = json_decode($response);

foreach($obj_response as $response){
    echo $response -> username . '<br>';
}