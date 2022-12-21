<?php
require('../db.php');
if(isset($_POST['updatepost'])){
    $id=$_POST['id'];
    $ptitle=mysqli_real_escape_string($db,$_POST['post_title']);
    $pcontent=mysqli_real_escape_string($db,$_POST['post_content']);
    $pcatergory=$_POST['post_category'];
    $query="update post set title='$ptitle',content='$pcontent',category_id='$pcatergory' where id='$id'";
    $run=mysqli_query($db,$query);
    $post_id=mysqli_insert_id($db);
    $img_name=$_FILES['post_image']['name'];
    $img_tmp=$_FILES['post_image']['tmp_name'];
    foreach($img_name as $index=>$img){
        if(move_uploaded_file($img_tmp[$index],"../images/$img")){
            $query="insert into images (post_id,image) values ($post_id,'$img')";
            $run=mysqli_query($db,$query);
        }
    }
    header('location:../admin/index.php?managepost');
}


?>