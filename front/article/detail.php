<?php


require_once "../util/util.php";

$sql = "select * from article where id = 7";

$article = DB__getRow($sql);

echo $article['title'];

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>루 :: 게시글 보기</title>
</head>

<style>


</style>

<body>
    
    <div>
    


    </div>

</body>
</html>