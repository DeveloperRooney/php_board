<?php

$dbConn = mysqli_connect("127.0.0.1:3306", "suhan", "201610", "sbs") or die("MariaDB 연결 실패");

// if ($dbConn != null) {
//     echo "MariaDB 연결 완료";
// }

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
<body>
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
            <td style="width : 30px"><?= $article['regDate']?></td>
        </tr>
        <?php }?>
        </body>
    </table>
    <button style="float : right; margin-right : 200px" type="button" onClick="location.href='write.php'">글작성</button>
</html>