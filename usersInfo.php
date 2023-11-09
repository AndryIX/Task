<?php
require_once "UserApi.php";
use Api\UserApi;

$users = UserApi::getUsers();
//$posts = UserApi::getPosts();
//$tasks = UserApi::getTasks();

foreach($users as $value){
    echo '<div class="card">';
    echo '<h3>Пользователь: '.$value -> username.'</h3>';
    echo '</div>';
}