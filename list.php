<?php
$dbConn = mysqli_connect("127.0.0.1:3307", "root", "201610", "employees") or die("DB connection error");

$sql = 'select * from employees where emp_no between 10000 and 20010';

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
            번호 : <?= $article['emp_no']?><br>
            생년월일 : <?= $article['birth_date']?><br>
            이름 : <?= $article['first_name']?><br>
            성별 : <?= $article['gender']?><br>
            <hr>
        <?php } ?>
    </div>
</body>
</html>