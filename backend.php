<?php
include "./input/baseX.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./input/css.css" rel="stylesheet" type="text/css">
<script src="./input/js.js"></script>
<script src="./input/jquery-3.4.1.min.js"></script>
</head>

<body>
<iframe name="back" style="display:none;"></iframe>
<div id="main">
<div id="top">
<a href="index.php">
<img src="./img/0416.jpg">
</a>
<img src="./img/0417.jpg">
</div>
<div id="left" class="ct">
<div style="min-height:400px;">
<a href="?do=admin">管理權限設置</a>
<?php
$kk=all('admin',[]);
$ksh=json_decode($kk[0]['sh']);
if(in_array(1,$ksh))echo "<a href='?do=th'>商品分類與管理</a>";
if(in_array(2,$ksh))echo "<a href='?do=ord'>訂單管理</a>";
if(in_array(3,$ksh))echo "<a href='?do=mem'>會員管理</a>";
if(in_array(4,$ksh))echo "<a href='?do=bot'>頁尾版權管理</a>";
if(in_array(5,$ksh))echo "<a href='?do=news'>最新消息管理</a>";
?>

<a href="?do=logout" style="color:#f00;">登出</a>
</div>
</div>
<div id="right">
<?php
$do=(!empty($_GET['do']))?$_GET['do']:"back";
$file="./bool/".$do.".php";
if(file_exists($file)){
    include_once $file;
}else{
    include_once './bool/back.php';
}





?>
</div>
<div id="bottom" style="line-height:70px; color:#FFF; background:url(img/bot.png);" class="ct">
<?php echo findAll('bottom',1,'')[0]['text'];?></div>
</div>

</body></html>