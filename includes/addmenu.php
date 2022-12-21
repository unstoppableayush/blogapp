<?php
require('../db.php');
if(isset($_POST['addmenu'])){
   $mname=mysqli_real_escape_string($db,$_POST['mname']);
   $maction=mysqli_real_escape_string($db,$_POST['maction']);
   $query="insert into menu (name,action) values ('$mname','$maction')";
   $run=mysqli_query($db,$query);

   header('location:../admin/index.php?managemenu');
}

if(isset($_POST['addsubmenu'])){
    $smname=mysqli_real_escape_string($db,$_POST['smname']);
    $smaction=mysqli_real_escape_string($db,$_POST['smlink']);
    $pid=mysqli_real_escape_string($db,$_POST['pid']);
    $query="insert into submenu (name,action,parent_menu_id) values ('$smname','$smaction','$pid')";
    $run=mysqli_query($db,$query);
 
    header('location:../admin/index.php?managemenu');
 }
?>
