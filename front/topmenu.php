<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">


    <!-- google font -->
    

    <title>topmenu</title>
</head>

<style>

.topmenu-wrap {
    background-color : #f2f3f7;
}

.topmenu-wrap ul{
    height : 32px;
    width : auto;
    margin : 0 2%;
}

.topmenu-wrap ul li {
    float: right;
    margin-right : 14px;
    line-height : 33px;
    font-family: 'Noto Sans KR', sans-serif;
}

.topmenu-wrap::after {
    content : "";
    display: block;
    clear : both;
}

.topmenu-top, .topmenu-mid {
    width : 75%;
    margin : 0 auto;
    font-size : 12px;
    color : #6c738a;
}

.topmenu-mid {
    background-color : black;
    height : 100px;
}

</style>

<body>
    <nav class="topmenu-wrap">
        <div class="topmenu-top">
            <ul>
                <li>회원가입</li>
                <li>로그인</li>
            </ul>
        </div>
    </nav>
</body>
</html>