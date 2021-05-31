<?php

if($_GET['userpass'] != NULL){

    $regExpPassword = "/^(?=.*[a-zA-Z])(?=.*[0-9]).{6,16}$/";


	if (!preg_match($regExpPassword, $_GET['userpass'])) {
		echo "영문, 숫자 포함 8~16자리";
	}else {
        echo "　";
	}



}else {
	echo "비밀번호를 입력해 주세요.";
} 

?>