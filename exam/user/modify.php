<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        text-align : center;
    }

</style>


<body>
    <h1>정보수정</h1>
    <form name="frm" action="doJoin.php" method="POST">
        <div>
            아이디 <?=$_SESSION['userId']?><br>
            비밀번호 <input type="password" name="userPass"><br>
            이름 <input type="text" name="userName"><br>
            닉네임 <input type="text" name="nickName" value="<?=$_SESSION['nickName']?>"><br>
            이메일 <input type="email" name="userEmail" value="<?=$_SESSION['userEmail']?>"><br><br>
            <button type="button" onClick="join()">수정</button>
        </div>
    </form>

</body>

<script>
    function join() {
        if (frm.userId.value=="") {
            alert("아이디를 입력해 주세요.");
            frm.userId.focus();
            return;
        }else if (frm.userPass.value=="") {
            alert("비밀번호를 입력해 주세요.");
            frm.userPass.focus();
            return;
        }else if (frm.userName.value=="") {
            alert("이름을 입력해 주세요.");
            frm.userName.focus();
            return;
        }else if (frm.nickName.value=="") {
            alert("닉네임 입력해 주세요.");
            frm.nickName.focus();
            return;
        }else if (frm.userEmail.value=="") {
            alert("이메일을 입력해 주세요.");
            frm.userEmail.focus();
            return;
        }

        frm.submit();
    }

</script>
</html>