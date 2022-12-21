<?php
require('../db.php');
if(isset($_GET['id'])){
    $cid=$_GET['id'];
    $query="delete from menu where id=$cid";
    $run=mysqli_query($db,$query);
    $query="delete from submenu where parent_menu_id=$cid";
    $run=mysqli_query($db,$query);
    header('location:../admin/index.php?managemenu');

}
?>