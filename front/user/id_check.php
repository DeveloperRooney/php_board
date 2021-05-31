<?php

// $dbConn = mysqli_connect("wayne94.cafe24.com", "wayne94", "suhan1994@@", "wayne94") or die("mariaDB 연결 실패");

require_once("../util/dao.php");

// echo $_GET['userid'];

if($_GET['userid'] != NULL){


	if (strlen($_GET['userid']) < 7) {
		echo "아이디는 7자 이상 사용 가능합니다.";
	}else {

		$regExpId = "/^[a-z0-9_-]\w{5,20}$/";

		if (!preg_match($regExpId, $_GET['userid'])) {
			echo "아이디는 영문, 숫자, -, _만 사용할 수 있습니다.";
		}else {
			$sql = "select * from user where userid = '{$_GET['userid']}' ";
		
			$rs = mysqli_query($dbConn, $sql);
		
			$id_check = $rs->fetch_array();
		
			if($id_check >= 1){
		
				echo "사용중인 아이디입니다.";
		
			} else {
		
				echo "사용 가능한 아이디입니다.";
		
			}
		}

	}



}else {
	echo "아이디를 입력해 주세요.";
} 

?>