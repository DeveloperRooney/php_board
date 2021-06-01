<?php

session_start();

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}

session_destroy();

?>

<script>

    alert("로그아웃되었습니다.");
    location.replace("../index.php");

</script>