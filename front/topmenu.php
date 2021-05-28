<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/util.css">

    <!-- google font -->
    

    <title>topmenu</title>
</head>

<style>

.navbar {
    /* background-color : #f2f3f7; */
}

.navbar ul{
    height : 32px;
    width : auto;
    margin : 0 2%;
}

.navbar ul li {
    float: right;
    margin-right : 14px;
    line-height : 33px;
    font-family: 'Noto Sans KR', sans-serif;
}

.nav-top::after, .nav-mid::after {
    content : "";
    display: block;
    clear : both;
}

.nav-top {
    background-color : #f2f3f7;
}

.topmenu-top, .topmenu-mid {
    font-size : 12px;
    color : #6c738a;
}

.nav-mid {
    border-bottom : 1.2px solid #EAEAEA;
    /* background-color : #fff; */
    /* box-shadow : 0px 0.8px 5px 0px #CFCFCF; */
    /* box-shadow: 0 4px 4px -4px #CFCFCF; */
}

.topmenu-mid {
    height : 65px;
}

.topmenu-mid ul {
    display : inline-block;
    float: right;
    margin-top : 16.5px;
}

.topmenu-mid ul li {
    margin-right : 10px;
    font-size : 18px;
    color : black;
    font-weight : bold;
}

.nav-bottom{
    color : black;
    box-shadow: 0 4px 4px -3px #CFCFCF;

}

.topmenu-bottom ul{
    height : 40px;
}

.topmenu-bottom ul li{
    margin-right : 8px;
    line-height : 40px;
}

.topmenu-bottom .odd {
    margin-right : 15px;
}

</style>

<body>
    <nav class="navbar">
        <div class="nav-top float-fix">
            <div class="topmenu-top layout">
                <ul>
                    <li><a href="">회원가입</a></li>
                    <li><a href="">로그인</a></li>
                </ul>
            </div>
        </div>
        <div class="nav-mid float-fix">
            <div class="topmenu-mid layout">
                <img src="img/logo.png" style="height:95%; margin : 3px">
            </div>
        </div>
        <div class="nav-bottom float-fix">
            <div class="topmenu-bottom layout">
                <ul>
                    <li><a href="">공지사항</a></li>
                    <li class="odd"><a href="">커뮤니티</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>