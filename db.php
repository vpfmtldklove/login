<?php 
    $host = 'localhost';
    $user = 'root';
    $db = 'hoysung3';
    // 디비서버접속
    $conn = mysqli_connect($host, $user);

    // 디비선택
    $db_conn = mysqli_select_db($conn, $db);
    if ($db_conn) {
        echo 'db접속성공!';
    } else {
        echo 'db접속실패';
    }
?>