<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./input/css.css" rel="stylesheet" type="text/css">
<script src="./input/js.js"></script>
<script src="./input/jquery-3.4.1.min.js"></script>
</head>
<?php
include "./input/baseX.php";

?>
<body>
<iframe name="back" style="display:none;"></iframe>
<div id="main">
<div id="top">
<a href="index.php">
<img src="./img/0416.jpg">
</a>
<div style="padding:10px;">
<a href="index.php">回首頁</a> |
<a href="?do=news">最新消息</a> |
<a href="?do=look">購物流程</a> |
<a href="?do=buycart">購物車</a> 
<?php
if(!empty($_SESSION['user'])){
    echo "|<a href='index.php?do=Flogout'>會員登出</a> ";
}else{
    echo "|<a href='?do=login'>會員登入</a>";
}
if(!empty($_SESSION['admin'])){
    echo "|<a href='backend.php'>返回管理</a> ";
}else{
    echo "|<a href='?do=admin'>管理登入</a>";
}
?>
</div>
<marquee>
    年終特賣會開跑了 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;情人節特惠活動
</marquee>
  
</div>
<div id="left" class="ct">
<div style="min-height:400px;">
<?php
$bigs=all('type',['parent'=>0]);

echo "<a href='?'>全部商品(".co('goods',['sh'=>1]).")</a>";
foreach ($bigs as $b) {
    echo "<div class='ww'><a href='?parent=".$b['parent']."&type=".$b['id']."'>".$b['name']."(".co('goods',['big'=>$b['id'],'sh'=>1]).")</a>";
    $mid=all('type',['parent'=>$b['id']]);
    foreach ($mid as $m) {
        echo "<div class='s'><a href='?parent=".$m['parent']."&type=".$m['id']."'>".$m['name']."(".co('goods',['mid'=>$m['id'],'sh'=>1]).")</a></div>";
    }
    echo "</div>";
}
?>

<div>
</div>
</div>
<span>
<div>進站總人數</div>
<div style="color:#f00; font-size:28px;">
00005                </div>
</span>
</div>
<div id="right">
<?php
$do=(!empty($_GET['do']))?$_GET['do']:"main";
$file="./tool/".$do.".php";
if(file_exists($file)){
    include_once $file;
}else{
    include_once './tool/main.php';
}
?>
</div>
<div id="bottom" style="line-height:70px;background:url(img/bot.png); color:#FFF;" class="ct">
<?php echo findAll('bottom',1,'')[0]['text'];?></div>
</div>
</body></html>