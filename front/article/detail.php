<?php


require_once "../util/util.php";

$sql = "select * from article where id = 7";

$article = DB__getRow($sql);

echo $article['title'];

?>