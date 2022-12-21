<?php
require('../db.php');
if(isset($_POST['addct'])){
   $ctname=mysqli_real_escape_string($db,$_POST['ctname']);
   $query="insert into category (name) values ('$ctname')";
   $run=mysqli_query($db,$query);

   header('location:../admin/index.php?managecategory');
}
?>