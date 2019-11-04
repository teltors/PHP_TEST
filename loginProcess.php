
<?php
session_start(); 

include "connect_db.php";

$userid=$_POST['userid'];
$passwd=$_POST['passwd'];

echo "아이디:".$userid."<br>";
echo "비밀번호:".$passwd."<br>";

$sql="select * from member
      where userid='$userid' and passwd='$passwd'";
$res=mysqli_query($conn,$sql);
$list=mysqli_num_rows($res);    //검색 행갯수

if($list){
    $_SESSION['userid']=$userid;
    
    echo "<script>        
        location.replace('exam1.php');
        </script>";
}else{
    echo "<script>
        alert('로그인 실패!!!');
        location.replace('login.php');
        </script>";
}
?>
