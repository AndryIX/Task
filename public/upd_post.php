<?php
require_once "../vendor/autoload.php";
require_once "../blocks/header.php";

?>

<form action="posts.php" method="post" class="form-addPost">
    <h2>Post id: <p name="postId"><?=$_GET["postId"]?></p></h2>
    <h3>Editing user: <?=$_GET["username"]?></h3>
    <textarea name="text"><?=$_GET["text"]?></textarea>
    <button name="btn_upd">Update</button>
</form>

<?

require_once "../blocks/footer.php";
?>