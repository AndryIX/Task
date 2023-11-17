<?php
require_once "../vendor/autoload.php";
require_once "../blocks/header.php";
?>

<form action="posts.php" method="post" class="form-addPost">
    <h2>ID of the message being deleted: <p name="postId"><?=$_GET["postId"]?></p></h2>
    <button name="btn_del">delete</button>
</form>

<?

require_once "../blocks/footer.php";
?>