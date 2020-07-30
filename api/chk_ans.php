<?php
include_once "../input/base2.php";

if($_SESSION['ans']==$_GET['chk']){
    $acc=$user->count($_POST['acc']);   
    if($acc==1){
        echo "登入成功";
    }else{
        echo "帳號錯誤";
    }
}else{
    echo "驗證碼錯誤";
}








?>