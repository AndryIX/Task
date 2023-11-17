<?php
require_once "../vendor/autoload.php";
require_once "../blocks/header.php";

use App\Post;

$users = json_decode(Post::getENTI("users"));
$posts = json_decode(Post::getENTI("posts"));

if(isset($_POST["btn_add"])) {?>
    <div class="result-query">
        <h2>Result query:</h2>
        <p><?=Post::addPost($_POST["text"],$_POST["selected_user"]);?></p>
    </div>
<?}else if(isset($_POST["btn_upd"])){?>
    <div class="result-query">
        <h2>Result query:</h2>
        <p><?=Post::updatePost($_POST["postId"],$_POST["text"]);?></p>
    </div>
<?}else if(isset($_POST["btn_del"])){?>
    <div class="result-query">
        <h2>Result query:</h2>
        <p><?=Post::deletePost($_POST["postId"]);?></p>
    </div>
<?}


?>



<form action="posts.php" method="post" class="form-addPost">
    <h1>Create post</h1>
    <div class="select-wrapper">
        <select name="selected_user" class="select">
        <?foreach($users as $uservalue){?>
            <option value="<?=$uservalue->id?>"><?=$uservalue->username?></option>
        <?}?>
        </select>
    </div>
    <textarea name="text"></textarea>
    <button name="btn_add">Add</button>
</form>

<h1 style="margin-top: 40px;">Posts</h1>
<?
foreach($users as $uservalue){
    foreach($posts as $postvalue){
        if($uservalue -> id == $postvalue -> userID){?>
            <div class="card">
                <h3>User: <?=$uservalue -> username?></h3>
                <p><?=$postvalue -> text?></p>
                <div class="interaction">
                    <a href="upd_post.php?postId=<?=$postvalue->id?>&username=<?=$uservalue->username?>&text=<?=$postvalue -> text?>">Edit</a>
                    <a href="del_post.php?postId=<?=$postvalue->id?>">Delete</a>
                </div>
            </div>
        <?}
    } 
}
require_once "../blocks/footer.php";