<?php

$dname=$_POST['dname'];

$pname=$_POST['pname'];

$sdate=$_POST['sdate'];
$edate=$_POST['edate'];

include "connect_db.php";

//문제 추가
if($dname != "" && $pname !="" && $sdate !="" && $edate !=""){
    $sql="insert into dept (dname,pname,sdate,edate)
            values ('$dname','$pname','$sdate', '$edate')";
    $res=mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo "<script>
        location.replace('exam4.php');
        </script>";
}else{
     echo "<script>
        alert('모두 작성해 주세요');
        history.back();
        </script>";
}



?>