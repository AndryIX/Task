<?php
require_once "../vendor/autoload.php";
require_once "../blocks/header.php";

use App\Post;

$users = Post::getENTI("users");
$posts = Post::getENTI("posts");
?>


<form action="posts.php" method="post" class="form-addPost">
    <h1>Create post</h1>
    <div class="select-wrapper">
        <select class="select">
        <?foreach($users as $uservalue){?>
            <option value="<?=$uservalue->id?>"><?=$uservalue->username?></option>
        <?}?>
        </select>
    </div>
    <textarea></textarea>
    <button>Add</button>
</form>

<h1 style="margin-top: 40px;">Posts</h1>
<?
foreach($users as $uservalue){
    foreach($posts as $postvalue){
        if($uservalue -> id == $postvalue -> userID){?>
            <div class="card">
            <h3>User: <?=$uservalue -> username?></h3>
            <?echo "<pre>\t".$postvalue -> text."</pre>";?>
        </div>
        <?}
    } 
}
require_once "../blocks/footer.php";