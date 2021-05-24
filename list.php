<?php
$dbConn = mysqli_connect("127.0.0.1", "root", "", "article") or die("DB connection error");

$sql = 'select * from article as A order by A.id desc';

$rs = mysqli_query($dbConn, $sql);



$articles = array();

while (true) {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>게시물 리스트</h1>
    <hr>
    <div>
        <?php foreach ($articles as $article) {?>
            번호 : <?= $article['id']?><br>
            작성일자 : <?= $article['regDate']?><br>
            수정일자 : <?= $article['updateDate']?><br>
            제목 : <?= $article['title']?><br>
            <hr>
        <?php } ?>
    </div>
</body>
</html>