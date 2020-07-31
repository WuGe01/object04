// JavaScript Document
function lof(x)
{
	location.href=x
}
function del(id) {
    let table=$("input[name='table']").val();
    $.post("./api/del.php",{table,id},()=>{
        location.reload()
    })
}
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
    let name=$("input[name='mid']").val();
    let parent=$("select[name='mid']").val();
    $.post("./api/all_save.php?table=type",{name,parent},(e)=>{
        getmid()
    })
}
function getmid() {
    $.get("./api/get_big.php",{},(k)=>{
        $("select[name='mid']").html(k);
    })
}
function getbig2() {
    $.get("./api/get_big.php",{},(k)=>{
        $("select[name='big']").html(k);
        getmid2()
        $("select[name='big']").on("change",()=>{getmid2()})
    })
}
function getmid2(){
    let parent=$("select[name='big']").val();
    $.get("./api/get_mid.php",{parent},(e)=>{
        $("select[name='mid']").html(e);
    })
}