<?php
include_once "../input/base2.php";

$bigs=$type->all(['parent'=>0]);
foreach ($bigs as $b) {
echo    "<tr class='tt'>
        <td>".$b['name']."</td>
        <td class='ct'>     <input type='button' value='修改' onclick='edit_th(this)'>
        <input type='hidden' value='".$b['id']."' >
                <input type='button' value='刪除' onclick='del(".$b['id'].")'>
        </td>
        </tr>";
       $AA=$type->all(['parent'=>$b['id']]);
if(!empty($AA)){
foreach ($AA as $a) {
    echo    "<tr class='pp'>
    <td class='ct'>".$a['name']."</td>
    <td class='ct'>     <input type='button' value='修改'   onclick='edit_th(this)'>
    <input type='hidden' value='".$a['id']."' >
            <input type='button' value='刪除' onclick='del(".$a['id'].")'>
    </td>
    </tr>";  
}



}
}

?>