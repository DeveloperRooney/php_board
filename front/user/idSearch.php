<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/util.css">

    <title>루 :: 아이디 찾기</title>
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

    /* .login-input input:focus{
        outline:none;
    } */

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
            <img src="../img/home.png" style="width : 7%; float : left; margin-left : 20px;">
        </a>
        <span style="margin-right : 40px">아이디 찾기</span>
    </div>
    <div class="layout">
        <div class="login-title">
            <h1 style="text-align:center;">이런!</h1>
            <p>아이디를 잊으셨나요?</p>
        </div>
    </div>
    <div class="login-input">
        <form action="doLogin.php" method=>
            <input type="text" placeholder="이름">
            <input type="text" placeholder="이메일">
            <a href="javascript:login()">아이디 찾기</a>
        </form>
    </div>
    <div class="search">
        <a href="login.php">로그인</a> | <a href="passSearch.php">비밀번호 찾기</a> | <a href="join.php">회원가입</a>
    </div>
</body>

<script>
    function login() {
        alert("로그인 버튼 테스트");
    }
</script>    
</html>