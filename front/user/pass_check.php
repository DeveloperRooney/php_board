<?php

if($_GET['userpass'] != NULL){


	if (strlen($_GET['userpass']) < 7) {
		echo "비밀번호는 영문과 숫자로 8자 이상 사용 가능합니다.";
	}else {
	
	}



}else {
	echo "비밀번호를 입력해 주세요.";
} 

?>