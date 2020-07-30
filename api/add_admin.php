<?php
include_once "../input/base2.php";
$_POST['sh']=json_encode($_POST['sh']);
$admin->save($_POST);
to("../backend.php?do=admin");
?>