<?php

require_once "util/util.php";

// $rs = DB__getRow("select * from user where userId = 'wayne10'");


// echo $rs['userId'];



// jsHistoryBack();


// jsLocationSet("https://www.naver.com", "네이버로 이동합니다.");



// prepare statement 사용하여 주입 해킹 차단
$sql = "select * from user where userId = ?";

$userId = "wayne10";

$stmt = $dbConn->prepare($sql);
$stmt->bind_param("s", $userId);

$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

print_r($user);

?>