<?php
include_once "../input/base2.php";
$db=new DB($_GET['table']);
$db->save($_POST);
?>