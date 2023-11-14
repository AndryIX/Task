<?php

require_once "../vendor/autoload.php";

use App\User;

$users = User::getENTI("users");
$posts = User::getENTI("posts");
$tasks = User::getENTI("tasks");

foreach($users as $uservalue){ ?>
    <div class="card">
    <h3>User: <?$uservalue -> username?></h3>
    <h3>Posts: </h3>
    <?foreach($posts as $postvalue){
        if($uservalue -> id == $postvalue -> userID) echo "<pre>\t".$postvalue -> text."</pre>";
    }?>
    <h3>Tasks: </h3>
    <?foreach($tasks as $taskvalue){
        if($uservalue -> id == $taskvalue -> userID) echo "<pre>\t".$taskvalue -> title."</pre>";
    }?>
    </div>
<?}
