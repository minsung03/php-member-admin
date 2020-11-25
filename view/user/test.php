<?php

include "../../core/lib.php";
use src\core\DB;

$sql = "SELECT * FROM member_tbl_02";
$result = DB::fetchAll($sql, []);

print_r($result);

?>