<?php
include_once "../input/base2.php";
$user->save($_POST);
print_r($_POST);
to("../backend.php?do=mem");
?>