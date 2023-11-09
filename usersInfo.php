<?php
require_once "UserApi.php";
use Api\UserApi;

$users = UserApi::getUsers();
$posts = UserApi::getPosts();
$tasks = UserApi::getTasks();

foreach($users as $uservalue){
    echo '<div class="card">';
    echo '<h3>Пользователь: '.$uservalue -> username.'</h3>';
    echo '<h3>Посты: </h3>';
    foreach($posts as $postvalue){
        if($uservalue -> id == $postvalue -> userID) echo '<p>'.$postvalue -> .'</p>';
            
    }
    echo '</div>';
}