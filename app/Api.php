<?php
namespace App;
class Api
{
    public static function getENTI($entity) {
        $ch = curl_init();
        $url = "http://my-json-server.typicode.com/AndryIX/Task/" . $entity;
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $url,
            CURLOPT_TIMEOUT => 60,
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response);
    }

    public static function post($entity, $data) {
        
    }
    
    public static function put($entity, $data) {

    }

    public static function delete($entity) {

    }
}