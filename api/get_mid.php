<?php
include_once "../input/base2.php";
$bigs=$type->all(['parent'=>$_GET['parent']]);
foreach ($bigs as $b) {
   echo "<option value='".$b['id']."'>".$b['name']."</option>";
}


?>