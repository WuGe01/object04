<?php
$goods=findAll('goods',$_GET['id'],'');
?>
<h2 class="ct">商品管理 </h2>
<div style="height:400px;overflow: auto;">
<input type="hidden" name="Cbig" value="<?=$goods[0]['big'];?>">
<input type="hidden" name="Cmid" value="<?=$goods[0]['mid'];?>">
<form action="./api/all_save.php?table=goods&to=add_goods" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$_GET['id'];?>">
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
        <td class="pp"><input value="<?=$goods[0]['no'];?>" type="text" name="no"></td>
    </tr>
    <tr>
        <td class="tt">商品名稱</td>
        <td class="pp"><input value="<?=$goods[0]['name'];?>" type="text" name="name" id=""></td>
    </tr>
    <tr>
        <td class="tt">商品價格</td>
        <td class="pp"><input value="<?=$goods[0]['price'];?>" type="text" name="price" id=""></td>
    </tr>
    <tr>
        <td class="tt">規格</td>
        <td class="pp"><input value="<?=$goods[0]['spec'];?>" type="text" name="spec" id=""></td>
    </tr>
    <tr>
        <td class="tt">庫存</td>
        <td class="pp"><input value="<?=$goods[0]['stock'];?>" type="text" name="stock" id=""></td>
    </tr>
    <tr>
        <td class="tt">商品圖片</td>
        <td class="pp"><input  type="file" name="img" id=""><?=$goods[0]['img'];?></td>
    </tr>
    <tr>
        <td class="tt">商品簡介</td>
        <td class="pp"><textarea name="intro" id="" style="width:80%;height:100px"><?=$goods[0]['intro'];?></textarea></td>
    </tr>
</table>
</div>
<div class="ct">
<input type="submit" value="修改">
<input type="reset" value="重置">
<input type="button" value="返回" onclick="location.href='backend.php?do=th'">
</div>
</form>
<script>
ckkk()
function ckkk() {
    $.get("./api/get_big.php",{},(k)=>{
        $("select[name='big']").html(k);
        $("select[name='big']").on("change",()=>{getmid2()})
        $("select[name='big'] option[value='<?=$goods[0]['big'];?>']").prop("selected",true);
        let parent=$("select[name='big']").val();
        $.get("./api/get_mid.php",{parent},(e)=>{
        $("select[name='mid']").html(e);
        $("select[name='mid'] option[value='<?=$goods[0]['mid'];?>']").prop("selected",true);
    })
    })
}
</script>