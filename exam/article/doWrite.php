<?php

$dbConn = mysqli_connect("wayne94.cafe24.com", "wayne94", "suhan1994@@", "wayne94") or die("MariaDB 연결 실패");

$title = $_POST['title'];
$name = $_POST['name'];
$content = $_POST['content'];


$sql = "insert into article(regDate, updateDate, title, name, content) 
values (now(), now(), '$title', '$name', '$content')";

$rs = mysqli_query($dbConn, $sql);

?>

<script>
    <?php if ($rs != null) {?>
        alert("글 작성이 완료되었습니다.");
        location.href="list.php";
    <?php }else { ?>
        alert("글 작성이 실패하였습니다. 관리자에게 문의해 주세요.");
        location.href="list.php";
    <?php } ?>

</script>