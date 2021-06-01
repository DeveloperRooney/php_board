<?php

require_once "../util.php";


$loginId = $_GET['loginId'];
$loginPw = $_GET['loginPw'];

$sql = DB__secSql();
$sql->add("select * ");
$sql->add("from member ");
$sql->add("where userId = ?", $loginId);
$sql->add("and userPass = ?", $loginPw);

$member = DB__getRow2($sql);

if (empty($member)) {
    
    echo "<script>alert('일치하는 회원이 없습니다.');</script>";
}


?>