<?php

include_once("topmenu.php");

require_once("util/util.php");

$sql = "select * from article order by id desc limit 8";


$list_array = DB__getRows($sql);


?>

<style>
    
    .section-main {
        background-color : lightblue;
        /* border : 1px solid black; */
        width : 90%;
        margin : 0 auto;
        height : 240px;
        border-radius : 10px;
    }

    .article-top {
        margin : 20px auto;
        margin-bottom : 10px !important;
        background-color : #f2f3f7;
        /* background-color : black; */
        text-align : center;
        box-shadow: 0 4px 4px -3px #CFCFCF;
    }

    .article-top span {
        color : black;
        display : inline-block;
        height: 35px;
        line-height : 35px;
        font-weight : bold;

    }

    .article-list {
        margin-top : 8px !important;
        /* padding : 8px 0; */
        width : 93%;
        margin : 0 auto;
    }

    .title {
        font-size : 14px;
        margin-bottom : 5px;
        line-height : 13px;
    }

    .info {
        font-size : 12px;
        margin-bottom : 5px;
        margin-left : 1px;
    }

    .line {
        height : 2px;
        border-bottom : 1px solid #999;
    }


</style>

    <title>루 :: 메인 페이지</title>

    <div class="main layout" style="margin-top:20px;">
        <div class="section-main">

        </div>
        <div class="article-top">
            <span>최신글</span>
        </div>
        <?php foreach ($list_array as $article){
            $date = substr($article['regDate'], 0, 10);
            ?>
        <div class="article-list">
            <div class="title"><a href="#"><?=$article['title']?></a></div>
            <div class="info"><?=$article['name']?> | <?=$date?> | 조회수 3 | 좋아요 3</div>
        </div>
        <div class="line"></div>
        <?php }?>
    </div>