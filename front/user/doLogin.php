<?php

// $dbConn = mysqli_connect("wayne94.cafe24.com", "wayne94", "suhan1994@@", "wayne94") or die("mariaDB 연결 실패");

require_once("../util/dao.php");

session_start();

$userId = $_POST['userid'];
$userPass = $_POST['userpass'];


// 로그인 결과 저장 변수
$loginCk = 0;


// 아이디 존재 유무 확인
$idCk = "select userId from user where userId = '$userId'";
$idCkResult = mysqli_query($dbConn, $idCk);


if ($idCkResult) {

    // 비밀번호 확인
    $passCk = "select * from user where userId = '$userId'";
    $rs = mysqli_query($dbConn, $passCk);
    $result = mysqli_fetch_assoc($rs);
    if ($result['userPass'] == $userPass) {
        
        // 세션
        $_SESSION['userId'] = $result['userId'];
        $_SESSION['userName'] = $result['userName'];
        $_SESSION['nickName'] = $result['nickName'];
        $_SESSION['userEmail'] = $result['userEmail'];

        $loginCk = 1;
    }else {
        $loginCk = 3;
    }
}else {
    $loginCk = 0;
}

if ($loginCk == 1) {
    echo '<script>';
    echo 'alert("로그인되었습니다.");';
    echo 'location.replace("../index.php");';
    echo '</script>';
    exit;
}else{
    echo '<script>';
    echo 'alert("아이디 또는 비밀번호가 일치하지 않습니다.");';
    echo 'history.back();';
    echo '</script>';

    exit;
}

?>

