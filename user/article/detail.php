<?php

$dbConn = mysqli_connect("127.0.0.1:3306", 
"suhan", "201610", "sbs") or die("MariaDB 연동 실패");

$id = $_GET['id'];

$sql = "select * from article where id = $id";

$rs = mysqli_query($dbConn, $sql);

$article = mysqli_fetch_assoc($rs);

$content = nl2br($article['content']);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$article['title']?></h1>
    <hr>
    <div>작성자 : <?=$article['name']?> / 작성일자 : <?=$article['regDate']?> / 수정일자 : <?=$article['updateDate']?></div>
    <hr>
    <p><?=$content?></p>
    <hr>
    <button type="button" onClick="location.href='list.php'">리스트</button>
    <button type="button" onClick="modify()">수정</button>
    <button type="button" onClick="location.href='delete.php?id=<?=$id?>'">삭제</button>
    
    <form name="frm" action="modify.php" method="POST">
        <input type="hidden" name="title" value="<?=$article['title']?>">
        <input type="hidden" name="id" value="<?=$article['id']?>">
        <input type="hidden" name="name" value="<?=$article['name']?>">
        <input type="hidden" name="content" value="<?=$article['content']?>">
    </form>
</body>

<script>

    function modify() {
        frm.submit();
    }

</script>
</html>