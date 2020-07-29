<?php
if(!empty($_POST['bottom'])){
    $t=['id'=>1,'text'=>$_POST['bottom']];
    save('bottom',$t,'');
}
?>
<h4 class="ct">編輯頁尾版權區</h4>
<form action="?do=bot" method="post">
<table class="all">
    <tr>
        <td class="tt ct">頁尾宣告內容</td>
        <td class="pp"><input type="text" name="bottom"></td>
    </tr>
</table>
<div class="ct"><input type="submit" value="編輯"><input type="button" value="重置" onclick="bottomDell()"></div>
</form>
<script>
function bottomDell() {
    $("input[name='bottom']").val('');
}
</script>