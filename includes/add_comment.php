<?php
require('../db.php');
if(isset($_POST['addcomment'])){
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $comment=mysqli_real_escape_string($db,$_POST['comment']);
    $post_id=$_POST['post_id'];
    
    $query="insert into comments(name,comment,post_id) values ('$name','$comment','$post_id') ";
    if(mysqli_query($db,$query)){
       header("location:../post.php?id=$post_id");
    }
    else{
        echo "Comment not added";
    }
}
?>