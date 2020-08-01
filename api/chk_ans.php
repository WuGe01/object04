<?php
include_once "../input/base2.php";
if($_SESSION['ans']==$_GET['chk']){
    $db=new DB($_GET['table']);
    $acc=$db->count($_POST); 
    // print_r($_POST);
    // print_r($_GET);
    // echo $acc;
    if($acc>0){
        switch ($_GET['table']) {
            case 'admin':
                $_SESSION['admin']=$_POST['acc'];
                break;
            case 'user':
                $_SESSION['user']=$_POST['acc'];
                break;
        }
        echo "登入成功";
        
    }else{
        echo "帳號錯誤";
    }
}else{
    echo "驗證碼錯誤";
}








?>