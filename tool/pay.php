<h2 class="ct">填寫資料</h2>
<?php
$user=find('user',['acc'=>$_SESSION['user']]);

?>
<table class="all">   
    <tr>
        <td class="ct tt">登入帳號</td>
        <td class="ct pp"><?=$_SESSION['user'];?></td>
    </tr>
    <tr>
        <td class="ct tt">姓名</td>
        <td class="ct pp"><input type="text" name="name" value="<?=$user['name'];?>"></td>
    </tr>
    <tr>
        <td class="ct tt">電子信箱</td>
        <td class="ct pp"><input type="text" name="mil" value="<?=$user['mil'];?>"></td>
    </tr>
    <tr>
        <td class="ct tt">聯絡地址</td>
        <td class="ct pp"><input type="text" name="addr" value="<?=$user['addr'];?>"></td>
    </tr>
    <tr>
        <td class="ct tt">連絡電話</td>
        <td class="ct pp"><input type="text" name="tel" value="<?=$user['tel'];?>"></td>
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

foreach ($_SESSION['cart'] as $key => $value) {
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
<div class="ct">
<input type="button" value="確定送出" onclick="buy()"><input type="button" value="返回修改訂單" onclick="location.href='?do=buycart'">

</div>
<script>
function buy() {

    let data={
        'name':$("input[name='name']").val(),
        'mil':$("input[name='mil']").val(),
        'tel':$("input[name='tel']").val(),
        'addr':$("input[name='addr']").val()
    }

    $.post("./api/buy.php",data,(e)=>{
        console.log(e)

        alert("訂購成功\n感謝您的選購")
        location.replace("index.php");
    })
}

</script>