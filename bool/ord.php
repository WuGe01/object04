<h2 class="ct">訂單管理</h2>
<table class="all">
    <tr class="tt">
        <td class="tt">訂單編號</td>
        <td class="tt">金額</td>
        <td class="tt">會員帳號</td>
        <td class="tt">姓名</td>
        <td class="tt">下單時間</td>
        <td class="tt">操作</td>
    </tr>

<?php
$variable=all('ord','');
foreach ($variable as $v) {
    
?>

<tr class="pp">
    <td class="pp" name='no'><a href="?do=till&id=<?=$v['id'];?>">
    <?=$v['no'];?></td></a>
    <td class="pp" name='total'><?=$v['total'];?></td>
    <td class="pp" name='acc'><?=$v['acc'];?></td>
    <td class="pp" name='name'><?=$v['name'];?></td>
    <td class="pp" name='ordtime'><?=$v['ordtime'];?></td>
    <td class="pp" >
    <input type='button' value='刪除' onclick='del(<?=$v['id'];?>)'>
    </td>
</tr>
<?php
}
?>
<input type="hidden" name="table" value="ord">
</table>
