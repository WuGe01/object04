<h4 class="ct">管理權限</h4>
<div class="ct">
<input type="button" value="新增管理員" onclick="goAdmin()">
</div>
<table class="all">
    <tr class="tt">
        <td>帳號:</td>
        <td>密碼</td>
        <td>管理:</td>
    </tr>
<?php
$ads=all('admin',null);
foreach ($ads as $a) {
$chk=json_decode($a['sh']);
?>
<tr class="pp">
    <td><?=$a['acc'];?></td>
    <td><?=$a['pw'];?></td>
    <td>
<?php    
if($a['acc']=='admin'){
echo "此帳號為最高權限";
}else{
echo "<input type='button' value='修改' onclick='editAdmin(".$a['id'].")'><input type='button' value='刪除'>";
}    
?>    
</td>
</tr>
<?php
}
?>
</table>
<script>
function goAdmin() {
    location.replace("?do=add_admin");
}
function editAdmin(e) {
    location.replace(`?do=edit_admin&id=${e}`);
}

</script>