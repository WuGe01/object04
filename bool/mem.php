<h2 class="ct">會員管理</h2>
<table class="all">
    <tr class="tt">
        <td class="tt">姓名</td>
        <td class="tt">會員帳號</td>
        <td class="tt">註冊日期</td>
        <td class="tt">操作</td>
    </tr>

<?php
$variable=all('user','');
foreach ($variable as $v) {
    
?>

<tr class="pp">
    <td class="pp" name='name'><?=$v['name'];?></td>
    <td class="pp" name='acc'><?=$v['acc'];?></td>
    <td class="pp" name='redate'><?=$v['redate'];?></td>
    <td class="pp" ><input type='button' value='修改' onclick='edituser(<?=$v['id'];?>)'>
    <input type='button' value='刪除' onclick='del(<?=$v['id'];?>)'>
    </td>
</tr>
<?php
}
?>
<input type="hidden" name="table" value="user">
</table>
<script>
function edituser(e) {
    location.replace(`?do=edit_user&id=${e}`);
}

</script>