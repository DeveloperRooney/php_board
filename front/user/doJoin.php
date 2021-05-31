<?php

// $dbConn = mysqli_connect("wayne94.cafe24.com", "wayne94", "suhan1994@@", "wayne94") or die("mariaDB 연결 실패");

require_once("../util/dao.php");

$userid = $_POST['userid'];
$userpass = $_POST['userpass'];
$username = $_POST['username'];
$nickname = $_POST['nickname'];
$useremail = $_POST['useremail'];
$birth = $_POST['birth'];
$gender = $_POST['gender'];

$sql = "insert into user(userId, userPass, userName, nickName, userEmail, birth, gender, regDate, loginDate) 
values('$userid', '$userpass', '$username', '$nickname', '$useremail', '$birth', '$gender', now(), now())";


$rs = mysqli_query($dbConn, $sql);

if ($rs) {
    echo 
    "<script>
        alert('가입이 완료되었습니다.');
        location.href='../index.php';
    </script>";
}else {
    echo 
    "<script>
        alert('가입이 실패하였습니다.\n관리자에게 문의해 주세요.');
        history.back();
    </script>";
}

?>