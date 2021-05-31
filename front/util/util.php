<?php


/* 데이터 베이스 관련 함수 시작 */

function DB__getRow($sql){
    $dbConn = mysqli_connect("wayne94.cafe24.com", "wayne94", "suhan1994@@", "wayne94") or die("MariaDB 연결 실패");

    $rs = mysqli_query($dbConn, $sql);

    $row = mysqli_fetch_assoc($rs);

    return $row;

}

function DB__getRows($sql){
    $dbConn = mysqli_connect("wayne94.cafe24.com", "wayne94", "suhan1994@@", "wayne94") or die("MariaDB 연결 실패");

    $rs = mysqli_query($dbConn, $sql);

    $rows = [];

    while($row = mysqli_fetch_assoc($rs)) {
        $rows[] = $row;
    }

    return $rows;

}

/* 데이터 베이스 관련 함수 끝 */



/* 자바스크립트 관련 함수 시작 */

function jsAlert($msg) {
    echo "<script>";
    echo "alert('$msg')";
    echo "</script>";
}

function jsLocationSet($url, $msg = null) {

    if ($msg) {
        jsAlert($msg);
    }

    echo "<script>";
    echo "location.href='$url';";
    echo "</script>";
    exit;
}

function jsHistoryBack($msg = null) {

    if ($msg) {
        jsAlert($msg);
    }

    echo "<script>";
    echo "history.back();";
    echo "</script>";
    exit;
}

/* 자바스크립트 관련 함수 끝 */


?>