<?php
include_once "../input/base2.php";

$Goods=$goods->find($_POST['id']);

switch ($_GET['do']) {
    case 1:
        $_POST['sh']=1;
        break;
    case 2:
        $_POST['sh']=0;
        break;
}
$goods->save($_POST);
?>