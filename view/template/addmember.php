<?php
    include "core/lib.php";
    use src\core\DB;

    $result = DB::fetchAll("SELECT * FROM member_tbl_02", [])

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width   , sinitial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <h2>홈쇼핑 회원등록</h2>
            <table border="1px">
                <tr>
                    <td>회원번호(자동발생)</td>
                    <td><input type="text" name="custno"><?=$result[1][0]?></td>
                </tr>
                <tr>
                    <td>회원성명</td>
                    <td><input type="text" name="custname"><?=$reasult[1][1]?></td>
                </td>
                <tr>
                    <td>회원전화</td>
                    <td><input type="text" name="phone"></td>
                </td>
                <tr>
                    <td>회원주소</td>
                    <td><input type="text" name="address"></td>
                </tr>               
                <tr>    
                    <td>가입일자</td>
                    <td><input type="text" name="joindate"></td>
                </td>
                <tr>
                    <td>고객등급[A:VIP,B:일반,C:직원]</td>
                    <td><input type="text" name="grade"></td>
                </td>
                <tr>
                    <td>도시코드</td>
                    <td><input type="text" name="city"></td>
                </td>
                </tr>
                <tr>
                    <td><input type="submit" value="등록"></td>
                    <td><input type="submit" value="조회"></td>
                </tr>
            </table>
    </form>
</body>
</html>