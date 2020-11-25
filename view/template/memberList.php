<?php

include "core/lib.php";
use src\core\DB;

$result = DB::fetchAll("SELECT * FROM member_tbl_02", []);
?>

<html>
<head>
    <style>
        table {
            display: table;
            border-collapse: separate;
            box-sizing: border-box;
            border-spacing: 2px;
            border-color: grey;
}
        table > tbody{
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
            display: flex;
        }
        table > tbody > tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
    </style>
</head>
<body>
<table border="1px">
    <tr><td><?= $result[0][0]?></td></tr>
    <tr><td><?= $result[0][1]?></td></tr>
    <tr><td><?= $result[0][2]?></td></tr>
    <tr><td><?= $result[0][3]?></td></tr>
    <tr><td><?= $result[0][4]?></td></tr>
    <tr><td><?= $result[0][5]?></td></tr>
</table>
<table border="1px">
    <tr><td><?= $result[1][0]?></td></tr>
    <tr><td><?= $result[1][1]?></td></tr>
    <tr><td><?= $result[1][2]?></td></tr>
    <tr><td><?= $result[1][3]?></td></tr>
    <tr><td><?= $result[1][4]?></td></tr>
    <tr><td><?= $result[1][5]?></td></tr>
</table>
<table border="1px">
    <tr><td><?= $result[2][0]?></td></tr>
    <tr><td><?= $result[2][1]?></td></tr>
    <tr><td><?= $result[2][2]?></td></tr>
    <tr><td><?= $result[2][3]?></td></tr>
    <tr><td><?= $result[2][4]?></td></tr>
    <tr><td><?= $result[2][5]?></td></tr>
</table>
<table border="1px">
    <tr><td><?= $result[3][0]?></td></tr>
    <tr><td><?= $result[3][1]?></td></tr>
    <tr><td><?= $result[3][2]?></td></tr>
    <tr><td><?= $result[3][3]?></td></tr>
    <tr><td><?= $result[3][4]?></td></tr>
    <tr><td><?= $result[3][5]?></td></tr>
</table>
<table border="1px">
    <tr><td><?= $result[4][0]?></td></tr>
    <tr><td><?= $result[4][1]?></td></tr>
    <tr><td><?= $result[4][2]?></td></tr>
    <tr><td><?= $result[4][3]?></td></tr>
    <tr><td><?= $result[4][4]?></td></tr>
    <tr><td><?= $result[4][5]?></td></tr>
</table>
<table border="1px">
    <tr><td><?= $result[5][0]?></td></tr>
    <tr><td><?= $result[5][1]?></td></tr>
    <tr><td><?= $result[5][2]?></td></tr>
    <tr><td><?= $result[5][3]?></td></tr>
    <tr><td><?= $result[5][4]?></td></tr>
    <tr><td><?= $result[5][5]?></td></tr>
</table>
</body>
</html>