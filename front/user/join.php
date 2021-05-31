<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/util.css">

    <!-- jquery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>

    <title>루 :: 회원가입</title>
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
        margin-bottom : 20px;
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
        padding : 27px 30px;
        font-weight : bold;

    }

    .login-input button{
        border : none;
        background-color : black;
        padding : 15px 5%;
        font-weight : bold;
        font-size : 14px;
        color : white;

    }
    .login-input span{
        font-weight : bold;
        font-size : 14px;
        margin-left : 5px;

    }

    .login-input button:hover{
        cursor : pointer;
    }
    
    .login-input input{
        border : none;
        border-bottom : 1.5px solid #c5c4c4;
        font-size : 16px;
        padding : 4px 3px;
        width : 95%;
        height : 35px;
        margin: 10px 0;
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
            <img src="../img/home.png" style="width : 32px; float : left; margin-left : 20px;">
        </a>
        <span style="margin-right : 60px">회원가입</span>
    </div>
    <div class="login-input">
        <form name="frm" action="doJoin.php" method="POST">
            <input type="text" name="userid" id="userid" placeholder="아이디" style="width: 70%;"><button id="idckbt" type="button" onClick="location.href='#'">중복확인</button>
            <div id="id_check" style="font-size : 14px">　</div>
            <input type="password" name="userpass" id="userpass" placeholder="비밀번호" style="margin-top:10px;">
            <div id="pass_check" style="font-size : 14px">　</div>
            <input type="password" name="userpassck" placeholder="비밀번호 확인">
            <input type="text" name="username" placeholder="이름(실명)">
            <input type="text" name="nickname" placeholder="닉네임">
            <input type="text" name="useremail" placeholder="이메일" style="width: 70%;"><button type="button" onClick="location.href='#'" style="padding : 15px 9.5%;">인증</button>

            <input type="text" name="birth" placeholder="생년월일(8자리)" style="width : 40%;">
            <input type="radio" name="gender" value="남" style="vertical-align : middle; width : 20px; line-heigth : 40px; margin-left : 28px;"><span style="vertical-align : middle;">남자</span>
            <input type="radio" name="gender" value="여" style="vertical-align : middle; width : 20px; line-heigth : 40px; margin-left : 20px;"><span style="vertical-align : middle;">여자</span>
            <a href="javascript:login()">회원가입</a>
        </form>
    </div>
</body>

<script>
    function login() {
        if (frm.userid.value == "") {
            alert("아이디를 입력해 주세요.");
            frm.userid.focus();
            return;
        }else if (frm.userpass.value == "") {
            alert("비밀번호를 입력해 주세요.");
            frm.userpass.focus();
            return;
        }else if (frm.userpassck.value == "") {
            alert("비밀번호 확인을 입력해 주세요.");
            frm.userpassck.focus();
            return;
        }else if (frm.userpass.value != frm.userpassck.value) {
            alert("비밀번호 확인이 일치하지 않습니다.");
            frm.userpassck.focus();
            return;
        }else if (frm.username.value == "") {
            alert("이름을 입력해 주세요.");
            frm.username.focus();
            return;
        }else if (frm.useremail.value == "") {
            alert("이메일을 입력해 주세요..");
            frm.useremail.focus();
            return;
        }else if (frm.birth.value == "") {
            alert("생년월일을 입력해 주세요..");
            frm.birth.focus();
            return;
        }

        frm.submit();
    }
</script>

<script>
$(document).ready(function() { 
	$("#idckbt").on("click", function(){ //check라는 클래스에 입력을 감지
		var userid = $('#userid').val(); 
		
        // alert("아이디 중복체크");
		$.ajax({ //post방식으로 id_check.php에 입력한 userid값을 넘깁니다
            url : 'id_check.php?userid=' +userid,
            type : 'get',
            success : function(data) {
                $('#id_check').text(data);
            }

    	});
    });
});


$(document).ready(function() { 
	$("#userpass").on("keyup", function(){ //check라는 클래스에 입력을 감지
		var userpass = $('#userpass').val(); 
		
        // alert("아이디 중복체크");
		$.ajax({ //post방식으로 id_check.php에 입력한 userid값을 넘깁니다
            url : 'pass_check.php?userpass=' +userpass,
            type : 'get',
            success : function(data) {
                $('#pass_check').text(data);
            }

    	});
    });
});
</script>

</html>