<?php
function getCategoryName($db,$id){
    $query="select * from category where id='$id' ";
    $run=mysqli_query($db,$query);
    $data=mysqli_fetch_assoc($run);
    return $data['name'];

}
function getAllCategoryName($db){
    $query="select * from category ";
    $run=mysqli_query($db,$query);
    $data=array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;

}
function getImageByPost($db,$post_id){
    $query="select * from images where post_id='$post_id' ";
    $run=mysqli_query($db,$query);
    $data=array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getSubMenu($db,$menu_id){
    $query="select * from submenu where parent_menu_id='$menu_id' ";
    $run=mysqli_query($db,$query);
    $data=array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getAllSubMenu($db){
    $query="select * from submenu ";
    $run=mysqli_query($db,$query);
    $data=array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getAllposts($db){
    $query="select * from post order by id desc";
    $run=mysqli_query($db,$query);
    $data=array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getAllMenu($db){
    $query="select * from menu ";
    $run=mysqli_query($db,$query);
    $data=array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getAllComments($db){
    $query="select * from comments order by id desc";
    $run=mysqli_query($db,$query);
    $data=array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getParentMenuName($db,$id){
    
    $query="select * from menu where id='$id'";
    $run=mysqli_query($db,$query);
    $data=mysqli_fetch_assoc($run);
    return $data['name'];

}
function getPostThumb($db,$id){
    
    $query="select * from images where post_id='$id'";
    $run=mysqli_query($db,$query);
    $data=mysqli_fetch_assoc($run);
    return $data['image'];

}
function getPostCategoryName($db,$id){
    
    $query="select * from category where id='$id'";
    $run=mysqli_query($db,$query);
    $data=mysqli_fetch_assoc($run);
    return $data['name'];

}
function getPostTitleName($db,$post_id){
    
    $query="select * from post where id='$post_id'";
    $run=mysqli_query($db,$query);
    $data=mysqli_fetch_assoc($run);
    return $data['title'];

}
function getComments($db,$post_id){
    $query="select * from comments where post_id='$post_id' order by id desc ";
    $run=mysqli_query($db,$query);
    $data=array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getAdminInfo($db,$email){
    
    $query="select * from admin where email='$email'";
    $run=mysqli_query($db,$query);
    $data=mysqli_fetch_assoc($run);
    return $data;

}
?>