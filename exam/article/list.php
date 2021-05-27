<?php

session_start();

require_once("../util/dao.php");


$sql = "select * from article order by id desc";

$rs = mysqli_query($dbConn, $sql);

$articles = [];

while(true) {
    $article = mysqli_fetch_assoc($rs);

    if ($article == null) {
        break;
    }

    $articles[] = $article;
}

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 리스트</title>
</head>

<style>

    a {
        text-decoration : none;
    }

    nav ul li {
        float :right;
        margin-right : 18px;
        list-style: none;
    }

    nav ul::after {
        content:"";
        display:block;
        clear:both;
    }
</style>

<body>

    <nav>        
        <ul>
            <?php if (isset($_SESSION['userId'])) { ?>
            <li>
                <a href="../user/doLogout.php">로그아웃</a>
            </li>
            <li>
                <a href="../user/modify.php">정보수정</a>
            </li>
            <?php }else {?>
            <li>
                <a href="../user/login.php">로그인</a>
            </li>
            <li>
                <a href="../user/join.php">회원가입</a>
            </li>
            <?php }?>

        </ul>
    </nav>


    <h1 style="text-align:center">게시판 리스트</h1>
    <table style="margin: 50px auto; width : 800px">
        <tr style="font-weight : bold; text-align : center; border : 1px solid grey">
            <td style="width : 20px">번호</td>
            <td style="width : 100px">제목</td>
            <td style="width : 30px">작성자</td>
            <td style="width : 30px">작성일자</td>
        </tr>

        <?php foreach($articles as $article) {?>
        <tr style="text-align : center; height : 30px; border : 1px solid grey">
            <td style="width : 20px"><?=$article['id']?></td>
            <td style="width : 100px; text-align : left"><a href="detail.php?id=<?=$article['id']?>"><?= $article['title']?></a></td>
            <td style="width : 30px"><?= $article['name']?></td>
            <td style="width : 30px"><?= substr($article['regDate'],0, 11)?></td>
        </tr>
        <?php }?>
        </body>
    </table>
    <button style="float : right; margin-right : 200px" type="button" onClick="write()">글작성</button>

</html>

<script>

    <?php if(isset($_SESSION['user']) {?>
    <?php }else { ?>

    function write() {
        location.href="write.php";
    }

    <?php }else?>

    function write() {
        alert("로그인 후 이용해주세요.");
    }

</script>