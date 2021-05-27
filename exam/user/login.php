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
    <h1>로그인</h1>
    <form name="frm" action="doLogin.php" method="POST">
        <div>
            아이디 <input type="text" name="userId"><br>
            비밀번호 <input type="password" name="userPass"><br>
            <button type="button" onClick="login()">로그인</button>
        </div>
    </form>

</body>

<script>
    function login() {
        if (frm.userId.value=="") {
            alert("아이디를 입력해 주세요.");
            frm.userId.focus();
            return;
        }else if (frm.userPass.value=="") {
            alert("비밀번호를 입력해 주세요.");
            frm.userPass.focus();
            return;
        }

        frm.submit();
    }

</script>
</html>