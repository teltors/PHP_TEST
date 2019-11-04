<?php
include "connect_db.php";

$no=$_POST['no'];
$passwd=$_POST['pw1'];
$birth=$_POST['birth'];
$phone=$_POST['phone'];
$email=$_POST['email'];

//회원 수정
$sql="update member set 
        passwd='$passwd',birth='$birth',phone='$phone',
        email='$email'
        where no=$no";

$res=mysqli_query($conn,$sql);

echo "<script>
    	location.replace('memberList.php');
    	</script>";
?>

