<?php
if(!empty($_GET['type'])){
if($_GET['parent']==0){
    $navs=all('type',['id'=>$_GET['type']],'');
    $nav=$navs[0][1];
    $goodsAll=all('goods',['big'=>$_GET['type'],'sh'=>1]);
    }else{
        $navs=all('type',['id'=>$_GET['type']],'');
        $nav=$navs[0][1];
        $goodsAll=all('goods',['mid'=>$_GET['type'],'sh'=>1]);

    }
}else{
$nav="全部商品";
$goodsAll=all('goods',['sh'=>1]);
}
?>


<h2 class="ct"><?=$nav;?></h2>
<style>
    .tht{
        width: 40%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .aoc{
        padding: 5px;
        margin: 10px auto;
        flex-wrap: wrap;
        display: flex;
    }

</style>

<?php
foreach ($goodsAll as $g) {
    echo "
    <div style='width:80%;display: flex;margin: 10px auto;' class='pp'>
    <div class='tht ct'>
    <a href='?do=detail&id=".$g['id']."'>
    <img src='./img/".$g['img']."' style='width:80%'>
    </a>
    </div>

    <div style='width:60%'>
    <div class='ct tt'>名稱:".$g['name']."</div>
    <div>價格:".$g['price']."
        <a href='?do=buycart&qt=1&id=".$g['id']."'><img src='img/0402.jpg' style='float:right'></a>
    </div>
    <div>規格:".$g['spec']."</div>
    <div>簡介:".$g['intro']."</div>
    </div></div>";
}

?>



