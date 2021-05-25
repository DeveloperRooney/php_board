<?php 

$dbConn = mysqli_connect("127.0.0.1:3306", "suhan", "201610", "sbs") or die("MariaDB 연결 실패");

$id = $_GET['id'];

$sql = "delete from article where id = $id";

$rs = mysqli_query($dbConn, $sql);

?>

<script>
    <?php if($rs != null) { ?>
        alert("글 삭제가 완료되었습니다.");
        location.href="list.php";
    <?php }else{ ?>
        alert("글 삭제가 실패하였습니다. 관리자에게 문의해 주세요.");
        location.href="list.php";
    <?php } ?>

</script>