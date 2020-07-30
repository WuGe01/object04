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