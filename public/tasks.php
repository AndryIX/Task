<?php
require_once "../vendor/autoload.php";
require_once "../blocks/header.php";

use App\Api;

$users = json_decode(Api::getENTI("users"));
$tasks = json_decode(Api::getENTI("tasks"));

foreach($users as $uservalue){ ?>
    <div class="card">
    <h3>User: <?=$uservalue -> username?></h3>
    <h3>Tasks: </h3>
    <?foreach($tasks as $taskvalue){
        if($uservalue -> id == $taskvalue -> userID) echo "<pre>\t".$taskvalue -> title."</pre>";
    }?>
    </div>
<?}
require_once "../blocks/footer.php";