<h2 class="ct">商品分類管理 </h2>
<div class="ct">新增大分類:<input type="text" name="big" id=""> <input type="button" value="新增" onclick="addbig()"></div>
<div class="ct">新增中分類:<select name="mid" id="" >
<option value=''>123</option>

</select><input type="text" name="" id=""> <input type="button" value="新增"  onclick="addmid()"></div>

<script>
function addbig() {
    let name=$("input[name='big']").val();
    let parent=0;
    $.post("./api/add_big.php",{name,parent},(e)=>{
        getmid()
    })
}
function addmid() {
    
}
function getmid() {
    $.get("./api/get_big.php",{},(k)=>{
            $("select[name='mid']").html(k);
    })
}

</script>