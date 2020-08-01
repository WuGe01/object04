<h2 class="ct">會員註冊</h2>
<form action="">
<table class="all">
    <tr>
        <td class="tt ct">姓名:</td>
        <td class="pp"><input type="text" name="name"></td>
    </tr>
    <tr>
        <td class="tt ct">帳號:</td>
        <td class="pp"><input type="text" name="acc">
        <input type="button" value="驗證帳號" onclick="clickacc()">
    
    </td>
    </tr>
    <tr>
        <td class="tt ct">密碼:</td>
        <td class="pp"><input type="password" name="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">電話:</td>
        <td class="pp"><input type="text" name="tel"></td>
    </tr>
    <tr>
        <td class="tt ct">住址:</td>
        <td class="pp"><input type="text" name="addr"></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱:</td>
        <td class="pp"><input type="text" name="mil"></td>
    </tr>


</table>
<div class="ct"><input type="button" value="確認"  onclick="reg()">
<input type="reset" value="重置">
</div>
</form>
<script>
function clickacc() {
    let acc=$("input[name='acc']").val();
    $.post("./api/chk_acc.php",{acc},(e)=>{
        if(e==1 ||acc == 'admin'){
            alert("該帳號已被註冊");
        }else{
            alert("該帳號可以使用");
        }
    })
    
}
function reg() {
    let acc=$("input[name='acc']").val();
    let pw=$("input[name='pw']").val();
    let name=$("input[name='name']").val();
    let tel=$("input[name='tel']").val();
    let addr=$("input[name='addr']").val();
    let mil=$("input[name='mil']").val();
    $.post("./api/chk_acc.php",{acc},(e)=>{
        if(e==1 ||acc == 'admin'){
            alert("該帳號已經被註冊");
        }else{
            $.post("./api/chk_reg.php?do=user",{acc,mil,addr,pw,name,tel},(k)=>{
                alert("註冊成功歡迎加入");
                console.log(k)
                to("../index.php");
                //  location.replace("?do=login");
            })
        }
    })


}

</script>