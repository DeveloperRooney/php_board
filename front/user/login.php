<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/util.css">

    <title>루 :: 로그인</title>
</head>

<style>

    .login-top {
        padding : 13px 0;
        text-align : center;
        color : #222;
        font-weight : bold;
        font-size : 22px;
        border-bottom : 1px solid #999;
        box-shadow: 0 4px 4px -3px #CFCFCF;

    }

    .login-title {
        padding : 45px 0;
    }

    .login-title h1, p {
        text-align : center;
    }

    .login-title h1 {
        font-weight : bold;
        font-size : 34px;
    }

    .login-title p {
        padding : 14px;
        font-weight : 400;
        font-size : 20px;
    }

    .login-input {
        padding : 0 30px;
        font-weight : bold;
    }
    
    .login-input input{
        border : none;
        border-bottom : 1.5px solid #c5c4c4;
        font-size : 18px;
        padding : 15px 3px;
        width : 99%;
        height : 35px;
        margin-bottom : 10px;
    }

    .login-input input:focus{
        /* outline:none; */
    }

    .login-input input::placeholder {
        color : #c5c4c4;
    }

    .login-input a {
        display: block;
        width : auto;
        margin : 40px 0;
        padding : 15px 0;
        color : white;
        text-align : center;
        background-color : black;
    }

    .search {
        text-align : center;
    }
</style>    

<body>
    <div class="login-top">
        <a href="../index.php">
            <img src="../img/home.png" style="width : 32px; float : left; margin-left : 20px;">
        </a>
        <span style="margin-right : 50px">로그인</span>
    </div>
    <div class="layout">
        <div class="login-title">
            <h1 style="text-align:center;">Welcome!</h1>
            <p>루에 오신 것을 환영합니다.</p>
        </div>
    </div>
    <div class="login-input">
        <form action="doLogin.php" method="POST" name="frm">
            <input type="text" name="userid" placeholder="아이디">
            <input type="password" name="userpass" placeholder="비밀번호">
            <a href="javascript:login()">로그인</a>
        </form>
    </div>
    <div class="search">
        <a href="idSearch.php">아이디 찾기</a> | <a href="passSearch.php">비밀번호 찾기</a> | <a href="join.php">회원가입</a>
    </div>
</body>

<script>
    function login() {
        if (frm.userid.value =="") {
            alert("아이디를 입력해 주세요.");
            frm.userid.focus();
            return;
        }else if (frm.userpass.value =="") {
            alert("비밀번호를 입력해 주세요.");
            frm.userpass.focus();
            return;
        }

        frm.submit();

    }
</script>    
</html>