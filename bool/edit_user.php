<?php
$id=$_GET['id'];
$arg=findAll('user',$id,'');

?>
<h2 class="ct">編輯會員資料</h2>
<form action="./api/add_user.php" method="post">
<input type="hidden" name="id" value='<?=$id;?>'>
<table class="all">    

    <tr>
        <td class="tt">帳號</td>
        <td class="pp"><input type="hidden" name="acc" value="<?=$arg[0]['acc'];?>"><?=$arg[0]['acc'];?></td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp"><input type="hidden" name="pw" value="<?=$arg[0]['pw'];?>"><?=$arg[0]['pw'];?></td>
    </tr>
    <tr>
        <td class="tt">累積交易額</td>
        <td class="pp"><input type="hidden" name="total" value="<?=$arg[0]['total'];?>"><?=$arg[0]['total'];?></td>
    </tr>
    <tr>
        <td class="tt">姓名</td>
        <td class="pp"><input type="text" name="name" value="<?=$arg[0]['name'];?>"></td>
    </tr>
    <tr>
        <td class="tt">電子信箱</td>
        <td class="pp"><input type="text" name="mil" value="<?=$arg[0]['mil'];?>"></td>
    </tr>
    <tr>
        <td class="tt">地址</td>
        <td class="pp"><input type="text" name="addr" value="<?=$arg[0]['addr'];?>"></td>
    </tr>
    <tr>
        <td class="tt">電話</td>
        <td class="pp"><input type="text" name="tel" value="<?=$arg[0]['tel'];?>"></td>
    </tr>

    
</table>
<div class="ct">
<input type="submit" value="修改">
<input type="reset" value="重置">
<input type="button" value="取消" onclick="location.replace('backend.php?do=mem')">
</div>
</form>