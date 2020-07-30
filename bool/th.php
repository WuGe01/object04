<input type="hidden" name="table" value="type">
<h2 class="ct">商品分類管理 </h2>
<div class="ct">新增大分類:<input type="text" name="big" id=""> <input type="button" value="新增" onclick="addbig()"></div>
<div class="ct">新增中分類:<select name="mid" id="" >
<option value=''>123</option>

</select><input type="text" name="" id=""> <input type="button" value="新增"  onclick="addmid()"></div>
<div style="
    height: 400px;
    overflow: auto;
">
<table class="all" id="flag"></table>
</div>
<script>
get_list()

function edit_th(e) {
    let id=$(e).next().val()
    let oldname=$(e).parent('td').prev().html()
    let name=prompt("輸入修改的文字內容",oldname);
    if(name!=null){
        $(e).parent('td').prev().html(name)
        $.post("./api/all_save.php?table=type",{id,name},()=>{})
    }
}

function get_list() {
    $.post("./api/get_type_list.php",{},(e)=>{
        $("#flag").html(e);
        getmid();
    })
}

function addbig() {
    let name=$("input[name='big']").val();
    let parent=0;
    $.post("./api/all_save.php?table=type",{name,parent},(e)=>{
        getmid()
    })
}
function addmid() {
    let name=$("option:selected").html();
    let parent=$("option:selected").val();
    $.post("./api/all_save.php?table=type",{name,parent},(e)=>{
        getmid()
    })
}
function getmid() {
    $.get("./api/get_big.php",{},(k)=>{
        $("select[name='mid']").html(k);
    })
}

</script>