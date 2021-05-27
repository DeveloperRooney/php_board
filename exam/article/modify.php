<?php 

$id = $_POST['id']; 
$title = $_POST['title']; 
$name = $_POST['name']; 
$content = $_POST['content']; 

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 글 작성</title>
</head>
<body>
    <form name="frm" action="doModify.php" method="POST">
        제목 <input type="text" name="title" value="<?=$title?>"><br>
        작성자 <input type="text" name="name" value="<?=$name?>"><br>
        내용<br>
        <textarea style="width : 400px; height : 300px" name="content"><?=$content?></textarea><br>
        <input type="hidden" name="id" value="<?=$id?>">
        <button type="button" onClick="send()">수정</button>
    </form>
</body>

<script>
    function send() {
        if (frm.title.value=="") {
            alert("제목을 입력해 주세요.");
            frm.title.focus();
            return;
        }else if (frm.name.value=="") {
            alert("작성자를 입력해 주세요.");
            frm.name.focus();
            return;
        }else if (frm.content.value=="") {
            alert("제목을 입력해 주세요.");
            frm.content.focus();
            return;
        }

        frm.submit();
    }

</script>
</html>