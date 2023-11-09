<?php

namespace Api;

class UserApi {
    private static function get($instance) {
        $ch = curl_init();
        $url = "http://my-json-server.typicode.com/AndryIX/Task/" . $instance;
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $url,
            CURLOPT_TIMEOUT => 60,
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response);
    }

    public static function getUsers() {
        return self::get("users");
    }

    public static function getPosts() {
        return self::get("posts");
    }

    public static function getTasks() {
        return self::get("tasks");
    }

}