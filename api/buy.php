<?php
include_once "../input/base2.php";
$data['no']=date("Ymd").rand(100000,999999);
$data['total']=0;
foreach ($_SESSION['cart'] as $key => $value) {
    $g=$goods->find($key);
    $data['total']+=($g['price']*$value);
}
$data=array_merge($data,$_POST,);
$data['acc']=$_SESSION['user'];
$data["goods"]=json_encode($_SESSION['cart']);
print_r($data);
$ord->save($data);
unset($_SESSION['cart']);
?>