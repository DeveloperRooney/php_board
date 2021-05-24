<?php

$dbConn = mysqli_connect("127.0.0.1", "root", "", "article") or die("MySQL 연동 실패");

$id = $_GET["id"];

// echo $id;

$deleteSql = "delete from article where id = ".$id;

$deleteRs = mysqli_query($dbConn, $deleteSql);

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
    
    <?php if ($deleteRs == true) { ?>
    <h1>
        <?=$id?>번째 글이 삭제되었습니다. <br>
    <button type="button" onClick="location.href='../list.php'">리스트로</button>

    </h1>
    <?php }else { ?>
        <?=$id?>번째 글은 존재하지 않습니다. <br>
    <button type="button" onClick="location.href='../list.php'">리스트로</button>

    <?php }?>
</body>
</html>