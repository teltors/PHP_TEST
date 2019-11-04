<?php
include "connect_db.php";

$no=$_POST['no'];
$passwd=$_POST['pw1'];
$birth=$_POST['birth'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$use_p=$_POST['use_p'];
$grant_p=$_POST['grant_p'];

//회원 수정
$sql="update member set 
        passwd='$passwd',birth='$birth',phone='$phone',
        email='$email',use_p=$use_p,grant_p=$grant_p
        where no=$no";

$res=mysqli_query($conn,$sql);

echo "<script>
    	location.replace('memberList.php');
    	</script>";
?>

