<?php



if(!empty($_GET['qt']) && !empty($_GET['id'])){
    if(!empty( $_SESSION['cart'][$_GET['id']])){
        $TMPNUMBER=$_SESSION['cart'][$_GET['id']]*1+$_GET['qt']*1;
        $_SESSION['cart'][$_GET['id']]=$TMPNUMBER;
    }else{
        $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
    }
}
if(!empty($_SESSION['cart']) || !isset($_SESSION['cart'])){
if(!empty($_SESSION['user'])){
// print_r($_SESSION['cart']);

?>
<h2 class='ct'><?=$_SESSION['user'];?>的購物車</h2>
<table class="all">
<tr class="tt">
    <td>編號</td>
    <td>商品名稱</td>
    <td>數量</td>
    <td>庫存量</td>
    <td>單價</td>
    <td>小計</td>
    <td>刪除</td>
</tr>
<?php
foreach ($_SESSION['cart'] as $key => $value) {
    if(co('goods',['id'=>$key])>0){
        
    
    $good=all('goods',['id'=>$key])[0];

?>
<tr class="pp">
    <td><?=$good['no'];?></td>
    <td><?=$good['name'];?></td>
    <td><input type="number" name="" value="<?=$value;?>"></td>
    <td><?=$good['stock'];?></td>
    <td><?=$good['price'];?></td>
    <td><?=$good['price']*$value;?></td>
    <td><img src="./img/0415.jpg" onclick="dels(<?=$key;?>)"></td>
</tr>
<?php
}}
?>
</table>
<?php
}else{
to("?do=login");
}
?>
<div class="ct">
<a href="index.php"><img src="./img/0411.jpg" alt=""></a>
<a href="index.php?do=pay"><img src="./img/0412.jpg" alt=""></a>
</div>
<script>
function dels(id) {
    $.post("./api/dels.php",{id},()=>{
        location.replace("?do=buycart")
    })
}
    
</script>
<?php

}else{
    echo "<h2 class='ct'>請選擇購物</h2>";
}
?>