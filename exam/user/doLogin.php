<?php


session_start();

require_once("../util/dao.php");


$userId = $_POST['userId'];
$userPass = $_POST['userPass'];


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
        $loginCk = 1;

        // 세션
        $_SESSION['userId'] = $result['userId'];
        $_SESSION['nickName'] = $result['nickName'];
        $_SESSION['userEmail'] = $result['userEmail'];
    }else {
        $loginCk = 3;
    }
}else {
    $loginCk = 0;
}

?>


<script>

    <?php if ($loginCk == 1) {?>
        alert("로그인되었습니다.");
        location.href="../article/list.php";
    <?php }else {?>
        alert("아이디 또는 비밀번호가 일치하지 않습니다.");
        history.back();
    <?php }?>
</script>