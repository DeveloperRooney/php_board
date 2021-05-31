<?php

function DB__getRow($sql){
    global $dbConn;

    $rs = mysqli_query($dbConn, $sql);

    $row = mysqli_fetch_assoc($rs);

    return $row;


}

?>