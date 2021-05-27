<?php 

$dbConn = mysqli_connect("wayne94.cafe24.com", "wayne94", "suhan1994@@", "wayne94") or die("MariaDB 연결 실패");

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$title = $_POST['title'];
$content = $_POST['content'];



$sql = "insert into article(name, password, email, title, content) values('$name','$password','$email','$title','$content')";

$rs = mysqli_query($dbConn, $sql);


?>

<script>
    <?php if ($rs !=null) {?>
        alert("작성되었습니다.");
        location.href="index.php";
    <?php }else {?>
        alert("작성이 실패하였습니다.");
        location.href="index.php";
    <?php } ?>
</script>