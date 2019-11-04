<?php
    $host="localhost";
    $userDB="root";
    $passwdDB="123456";
    
    $conn=mysqli_connect($host,$userDB,$passwdDB) or die("mysql 서버 접속 에러");
    $db=mysqli_select_db($conn,'shop_db');
?>