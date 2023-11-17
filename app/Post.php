<?

namespace App;

class Post extends Api
{
    public static function addPost($text, $userID){
        $posts = json_decode(parent::getENTI("posts"),true);
        $last_item = end($posts);
        $id = $last_item['id'];
        
        $data[] = array (
            'posts' => [
                'id' => ++$id,
                'text' => "$text",
                'userID' => $userID
            ]
        );
        return parent::post("posts", $data);
    }

    public static function updatePost($id, $text){
        $data[] = array (
            'posts' => [
                'id' => $id,
                'text' => "$text"
            ]
        );
        return parent::put("posts", $data);
    }

    public static function deletePost($id){
        $data[] = array (
            'posts' => [
                'id' => $id,
            ]
        );
        return parent::del("posts", $data);
    }

}