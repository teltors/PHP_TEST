<?php
session_start();      

$userid=$_SESSION['userid'];

session_abort();

//로그인 체크
if($userid==null){
    echo "<script>        
        location.replace('login.php');
        </script>";
}

?>