<?php
require('../db.php');
if(isset($_GET['id'])){
    $cid=$_GET['id'];
    $query="delete from comments where id=$cid";
    $run=mysqli_query($db,$query);
    header('location:../admin/index.php?managecomments');

}
?>