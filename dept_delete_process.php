<?php

$deptno=$_POST['deptno'];



include "connect_db.php";

$sql="delete from dept where deptno={$deptno}";

$res=mysqli_query($conn, $sql);

if($res==1){
    die("<meta http-equiv='refresh' content='0; url=exam4.php'>");
}else{
    echo "삭제실패";
}

?>
