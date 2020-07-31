<?php
 
$goods=all('goods',['id'=>$_GET['id'],'sh'=>1]);
// $big=all('type',['id'=>$goods[0]['big'],'sh'=>1])[0]['name'];
// $mid=all('type',['id'=>$goods[0]['mid'],'sh'=>1])[0]['name'];
// print_r($goods);
$big=all('type',['id'=>$goods[0]['big']])[0]['name'];
$mid=all('type',['id'=>$goods[0]['mid']])[0]['name'];
?>




<h2 class="ct"><?=$goods[0]['name'];?></h2>

<?php    
    echo"<div style='width:80%;display: flex;margin: 10px auto;;padding:10px' class='pp'>
    <div class='tht ct'>
    <a href='?do=detail&id=".$goods[0]['id']."'>
    <img src='./img/".$goods[0]['img']."' style='width:80%'>
    </a>
    </div>
    <div style='width:60%'>
    <div>分類:".$big.">".$mid."</div>
    <div>編號:".$goods[0]['no']."
    <div>價格:".$goods[0]['price']."

    </div>
    <div>規格:".$goods[0]['spec']."</div>
    <div>簡介:".$goods[0]['intro']."</div>
    <div>庫存量:".$goods[0]['stock']."</div>
    </div>
    </div></div>
    <div class='tt ct' style='width:80%;margin: 10px auto;padding:10px'>
    <input type='number' name='qt' value='1'>
    <input type='hidden' name='id' value='".$goods[0]['id']."'>
    <a href='javascript:buy()'><img src='img/0402.jpg'></a>
    </div>
    ";
?>

<script>
function buy() {
    let qt=$("input[name='qt']").val()
    let id=$("input[name='id']").val()
    location.href=`?do=buycart&id=${id}&qt=${qt}`;
}



</script>