<div style="height: 550px;overflow: auto;">
<input type="hidden" name="table" value="type">
<input type="hidden" name="table2" value="goods">
<h2 class="ct">商品分類管理 </h2>
<div class="ct">新增大分類:<input type="text" name="big" id=""> <input type="button" value="新增" onclick="addbig()"></div>
<div class="ct">新增中分類:<select name="mid" id="" >
</select><input type="text" name="mid"> <input  type="button" value="新增"  onclick="addmid()"></div>
<table class="all" id="flag"></table>
<h2 class="ct">商品管理 </h2>
<div class="ct"><input type="button" value="新增商品" onclick="location.href='?do=add_goods'"></div>
<table class="all">
<tr class="tt ct">
    <td>編號</td>
    <td>商品名稱</td>
    <td>庫存量</td>
    <td>狀態</td>
    <td style="
    width: 150px!important;
">操作</td>
</tr>
<?php
$rows=all('goods',[]);
foreach ($rows as $r) {
$a=($r['sh']==1)?'上架':'下架';
?>
<tr class="pp ct">
    <td><?=$r['no'];?></td>
    <td><?=$r['name'];?></td>
    <td><?=$r['stock'];?></td>
    <td id="sh_taget<?=$r['id'];?>"><?=$a;?></td>
    <td>
    <input type="button" value="修改"  onclick="location.href='?do=edit_goods&id=<?=$r['id'];?>'">
    <input type="button" value="刪除"  onclick="del2(<?=$r['id'];?>)">
    <input type="button" value="上架" onclick="sh(<?=$r['id'];?>,1)">
    <input type="button" value="下架" onclick="sh(<?=$r['id'];?>,2)">    

    </td>
</tr>
<?php
}
?>
</table>
</div>
<script>
get_list()

function sh(id,e) {
    $.post(`./api/show.php?do=${e}`,{id},()=>{
        switch (e) {
            case 1:
                $(`#sh_taget${id}`).html("上架")
                break;
            case 2:
                $(`#sh_taget${id}`).html("下架")
                break;
        }
    })
}
</script>