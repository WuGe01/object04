<?php
if(!empty($_GET['from'])){
    if(!empty($_SESSION['user']))unset($_SESSION['user']);
}else{
    if(!empty($_SESSION['admin']))unset($_SESSION['admin']);
}
to("./index.php");
?>