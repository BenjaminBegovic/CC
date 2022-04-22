<?php

include 'model.php';
$model = new Model();
$id = $_REQUEST["id"];
$delete = $model->delete($id);
  if($delete){
      header("Location:index.php?message=You have successfully deleted user data");
  }else{
      header("Location:index.php?message=false");
  }
?>