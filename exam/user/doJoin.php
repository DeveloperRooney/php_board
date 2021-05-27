<?php

require_once("../util/dao.php");

$userId = $_POST['userId'];
$userPass = $_POST['userPass'];
$userName = $_POST['userName'];
$nickName = $_POST['nickName'];
$userEmail = $_POST['userEmail'];

$sql = "insert into user(userId, userPass, userName, nickName, userEmail) 
values('$userId', '$userPass', '$userName', '$nickName', '$userEmail')";

$rs = mysqli_query($dbConn, $sql);

?>

<script>
    <?php if ($rs != null) { ?>
        alert("회원가입이 완료되었습니다.");
        location.href="../article/list.php"
    <?php }else { ?>
        alert("회원가입이 실패하였습니다.");
        history.back();
    <?php } ?>
</script>