<h2>第一次購物</h2>
<a href="?do=reg">
<img src="./img/0413.jpg" alt="">
</a>
<h2>會員登入</h2>
<table class="all">
    <tr>
        <td class="tt ct">帳號:</td>
        <td class="pp"><input type="text" name="acc"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼:</td>
        <td class="pp"><input type="password" name="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp">
<?php    
     $a=rand(10,99);     
     $b=rand(10,99);
     $_SESSION['ans']=$a+$b;
     echo $a."+".$b;
?>        
        <input type="text" name="chk"></td>
    </tr>
</table>
<div class="ct"><input type="button" value="確認" onclick="login()"></div>
<script>
function login() {
    let chk=$("input[name='chk']").val();
    let acc=$("input[name='acc']").val();
    let pw=$("input[name='pw']").val();
        $.post(`./api/chk_ans.php?chk=${chk}&table=user`,{acc,pw},(e)=>{
            console.log(e)
            alert(e);
            to("./index.php");
        })    
}
</script>