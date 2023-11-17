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
        $err = curl_error($ch);

        curl_close($ch);
        
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }   
    }

    public static function post($entity, $data) {
        $ch = curl_init();
        $url = "http://my-json-server.typicode.com/AndryIX/Task/". $entity;
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
        ]);
        $err = curl_error($ch);
        curl_close($ch);
        
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return "Entry ADDED successfully!";
        }  
    }
    
    public static function put($entity, $data) {
        $ch = curl_init();
        $url = "http://my-json-server.typicode.com/AndryIX/Task/". $entity;
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => json_encode($data),
        ]);
        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return "Entry UPDATED successfully!";
        }  
    }

    public static function del($entity, $data) {
        $ch = curl_init();
        $url = "http://my-json-server.typicode.com/AndryIX/Task/". $entity;
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_POSTFIELDS => json_encode($data),
        ]);
        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return "Entry DELETED successfully!";
        }  
    }
}