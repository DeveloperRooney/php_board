<?php
$dbConn = mysqli_connect("127.0.0.1", "root", "", "article") or die("DB connection error");

$sql = "select * from article as A order by A.id desc";

$rs = mysqli_query($dbConn, $sql);

$article4 = mysqli_fetch_assoc($rs);
$article3 = mysqli_fetch_assoc($rs);
$article2 = mysqli_fetch_assoc($rs);
$article1 = mysqli_fetch_assoc($rs);
$article0 = mysqli_fetch_assoc($rs);

$articles =[];

$articles[] = $article4;
$articles[] = $article3;
$articles[] = $article2;
$articles[] = $article1;

?>

<!DOCTYPE html>
<html lang="en">
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
        <?php } ?>
    </div>
</body>
</html>