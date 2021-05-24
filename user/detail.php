<?php

$dbConn = mysqli_connect("127.0.0.1", "root", "", "article") or die("MySQL 연결 실패");

$id = $_GET["id"];

// echo $id;

$sql = "select * from article where id = ".$id;

// echo $sql;

$resultSet = mysqli_query($dbConn, $sql);

$detail = mysqli_fetch_assoc($resultSet);

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

    <?php if ($detail != null) { ?>
    <h1>
        상세페이지
    </h1>
    번호 : <?= $detail['id']?><br>
    작성일자 : <?= $detail['regDate']?><br>
    수정일자 : <?= $detail['updateDate']?><br>
    제목 : <?= $detail['title']?><br>
    <?php }else { ?>
        <div><?=$id?>번째 글은 존재하지 않습니다.</div>
    <?php } ?>    
    <button type="button" onClick="location.href='../list.php'">리스트로</button>

</body>
</html>