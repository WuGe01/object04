<h2 class="ct">新增管理帳號</h2>
<form action="./api/add_admin.php"  method="post">
<table class="all">    
    <tr>
        <td class="tt">帳號</td>
        <td class="pp"><input type="text" name="acc" id=""></td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp"><input type="text" name="pw" id=""></td>
    </tr>
    <tr>
        <td class="tt">權限</td>
        <td class="pp">
        <input type="checkbox" name='sh[]' value="1">商品分類與管理<br>
        <input type="checkbox" name='sh[]' value="2">訂單管理<br>
        <input type="checkbox" name='sh[]' value="3">會員管理<br>
        <input type="checkbox" name='sh[]' value="4">頁尾版權區管理<br>
        <input type="checkbox" name='sh[]' value="5">最新消息管理<br>
        </td>
    </tr>
</table>
<div class="ct">
<input type="submit" value="修改">
<input type="reset" value="重置">
</div>
</form>