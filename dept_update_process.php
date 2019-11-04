<?php

$deptno=$_POST['deptno'];
$dname=$_POST['dname'];
$pname=$_POST['pname'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];


include "connect_db.php";

$sql="update dept set dname='{$dname}', pname='{$pname}', sdate='{$sdate}', edate='{$edate}' where deptno={$deptno}";

$res=mysqli_query($conn, $sql);

if($res==1){
    die("<meta http-equiv='refresh' content='0; url=exam4.php'>");
}else{
    echo "수정실패";
}

?>
