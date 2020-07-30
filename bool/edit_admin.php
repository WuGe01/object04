<?php
$id=$_GET['id'];
$arg=findAll('admin',$id,'');
$farg=json_decode($arg[0]['sh']);
?>
<h2 class="ct">編輯管帳號</h2>
<form action="./api/add_admin.php" method="post">
<input type="hidden" name="id" value='<?=$id;?>'>
<table class="all">    

    <tr>
        <td class="tt">帳號</td>
        <td class="pp"><input type="text" name="acc" value="<?=$arg[0]['acc'];?>"></td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp"><input type="text" name="pw" value="<?=$arg[0]['pw'];?>"></td>
    </tr>
    <tr>
        <td class="tt">權限</td>
        <td class="pp">
        <input type="checkbox" name='sh[]' value="1" <?=(in_array(1,$farg))?'checked':'';?>>商品分類與管理<br>
        <input type="checkbox" name='sh[]' value="2" <?=(in_array(2,$farg))?'checked':'';?>>訂單管理<br>
        <input type="checkbox" name='sh[]' value="3" <?=(in_array(3,$farg))?'checked':'';?>>會員管理<br>
        <input type="checkbox" name='sh[]' value="4" <?=(in_array(4,$farg))?'checked':'';?>>頁尾版權區管理<br>
        <input type="checkbox" name='sh[]' value="5" <?=(in_array(5,$farg))?'checked':'';?>>最新消息管理<br>
        </td>
    </tr>
</table>
<div class="ct">
<input type="submit" value="修改">
<input type="reset" value="重置">
</div>
</form>