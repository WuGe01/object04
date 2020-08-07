<?php
$rows=find('ord',['id'=>$_GET['id']]);
?>
<h2 class="ct">訂單編號<?=$rows['no'];?>的詳細資料</h2>
<table class="all">   
    <tr>
        <td class="ct tt">會員帳號</td>
        <td class="ct pp"><?=$rows['acc'];?></td>
    </tr>
    <tr>
        <td class="ct tt">姓名</td>
        <td class="ct pp"><?=$rows['name'];?></td>
    </tr>
    <tr>
        <td class="ct tt">電子信箱</td>
        <td class="ct pp"><?=$rows['mil'];?></td>
    </tr>
    <tr>
        <td class="ct tt">聯絡地址</td>
        <td class="ct pp"><?=$rows['addr'];?></td>
    </tr>
    <tr>
        <td class="ct tt">連絡電話</td>
        <td class="ct pp"><?=$rows['tel'];?></td>
    </tr>

</table>
<table class="all">
    <tr>
        <td class="tt ct">商品名稱</td>
        <td class="tt ct">編號</td>
        <td class="tt ct">數量</td>
        <td class="tt ct">單價</td>
        <td class="tt ct">小記</td>
    </tr>
<?php
$sum=0;
$goods=json_decode($rows['goods']);
foreach ($goods as $key => $value) {
    $rows=find('goods',['id'=>$key]);
    $sum+=$rows['price']*$value;

?>

    <tr>
        <td class="pp ct"><?=$rows['name'];?></td>
        <td class="pp ct"><?=$rows['no'];?></td>
        <td class="pp ct"><?=$value;?></td>
        <td class="pp ct"><?=$rows['price'];?></td>
        <td class="pp ct"><?=$rows['price']*$value;?></td>
    </tr>
<?php
}

?>
    <tr class="tt">
        <td colspan="5" class="ct">總計:<?=$sum;?></td>
    </tr>

</table>
<div class="ct"><input type="button" value="返回" onclick="location.replace('?do=ord')"></div>