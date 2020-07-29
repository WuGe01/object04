<?php
date_default_timezone_set("Asia/Taipei");
session_start();
$dns="mysql:host=localhost;charset=utf8;dbname=db04";
$pdo=new PDO($dns,"root","");
function findAll($table,$arg,$more){
    global $pdo;
    $s="select * from ".$table." where ";
    $t=[];
    if(is_array($arg)){
        foreach ($arg as $key => $value) {
            $t=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=join(" && ",$t);
    }else{
        $s.=" id ='".$arg."'";
    }
    if(!empty($more))$s.=" ".$more;
    // echo $s;
    return $pdo->query($s)->fetchAll(PDO::FETCH_ASSOC);
}
function del($table,$arg){
    global $pdo;
    $s="delete from ".$table." where ";
    $t=[];
    if(is_array($arg)){
        foreach ($arg as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=join(" && ",$t);
    }else{
        $s.=" id ='".$arg."'";
    }
    return $pdo->exec($s);
}
function save($table,$arg,$more){
    global $pdo;
    if(!empty($arg['id'])){
        $t=[];
        foreach ($arg as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s="update ".$table." set ".join(" , ",$t)." where id ='".$arg['id']."'";
        
    }else{
        $s="insert into $table (`".join("`,`",array_keys($arg))."`) values ('".join("','",$arg)."')";
    }
    if(!empty($more))$s.=" ".$more;
    return $pdo->exec($s);
    // echo $s;
}

function q($a){
    global $pdo;
    return $pdo->query($a)->fetchAll(PDO::FETCH_ASSOC);
}
function to($a){
    header("location:".$a);
}
?>