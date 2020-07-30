<?php
include_once "../input/base2.php";
if($_SESSION['ans']==$_GET['chk']){
    switch ($_GET['table']) {
        case 'admin':
            $acc=$admin->count($_POST); 
            $_SESSION['admin']=$_POST['acc'];
            break;
        case 'user':
            $acc=$user->count($_POST); 
            $_SESSION['user']=$_POST['acc'];
            break;
    }
    if($acc==1){
        echo "登入成功";
    }else{
        echo "帳號錯誤";
    }
}else{
    echo "驗證碼錯誤";
}








?>