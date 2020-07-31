
<h2 class="ct">商品管理 </h2>
<div style="height:400px;overflow: auto;">
<form action="./api/all_save.php?table=goods&to=add_goods" method="post" enctype="multipart/form-data">
<table class="all">    
    <tr>
        <td class="tt">所屬分大分類</td>
        <td class="pp"><select name="big" id="" ></select></td>
    </tr>
    <tr>
        <td class="tt">所屬中分類</td>
        <td class="pp"><select name="mid" id="" ></select></td>
    </tr>
    <tr>
        <td class="tt">商品編號</td>
        <td class="pp">完成後分類後自動分配<input type="hidden" name="no"></td>
    </tr>
    <tr>
        <td class="tt">商品名稱</td>
        <td class="pp"><input type="text" name="name" id=""></td>
    </tr>
    <tr>
        <td class="tt">商品價格</td>
        <td class="pp"><input type="text" name="price" id=""></td>
    </tr>
    <tr>
        <td class="tt">規格</td>
        <td class="pp"><input type="text" name="spec" id=""></td>
    </tr>
    <tr>
        <td class="tt">庫存</td>
        <td class="pp"><input type="text" name="stock" id=""></td>
    </tr>
    <tr>
        <td class="tt">商品圖片</td>
        <td class="pp"><input type="file" name="img" id=""></td>
    </tr>
    <tr>
        <td class="tt">商品簡介</td>
        <td class="pp"><textarea name="intro" id="" style="width:80%;height:100px"></textarea></td>
    </tr>
</table>
</div>
<div class="ct">
<input type="submit" value="新增">
<input type="reset" value="重置">
<input type="button" value="返回" onclick="location.href='backend.php?do=th'">
</div>
</form>
<script>
getbig2()
getNo()
$("select[name='big']").on("change",()=>{getNo()})
function getNo() {
    let no=Math.random().toString().substr(2,6)
    $("input[name='no']").val(no);
    console.log(no)
}
</script>