<?php
include_once "../input/base2.php";
$db=new DB($_GET['table']);
if(!empty($_FILES)){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}
$db->save($_POST);
print_r($_POST);
print_r($_GET['table']);
if(!empty($_GET['to']))to("../backend.php?do=".$_GET['to']);
?>