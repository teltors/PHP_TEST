<?php
	include "connect_db.php";

	$userid=trim($_POST['userid']);    
	$passwd=$_POST['pw1'];
	$name=$_POST['name'];
	$birth=$_POST['birth'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	
	//id 중복체크
	$sql="select count(*) from member where userid='$userid'";
	$res=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($res);
	$num=$rs[0];
	
	if($num>0){
		echo "<script>
		alert('존재하는 아이디입니다.');
		location.replace('member_form.php');
		</script>";
		exit;     //php 탈출
	}
	
	//회원 추가
	$sql="insert into member(userid,passwd,name,birth,phone,email) 
			values ('$userid','$passwd','$name','$birth','$phone','$email')";	
	
	$res=mysqli_query($conn,$sql);
	
	if($res>0){
			echo "<script>					
					location.replace('login.php');
					</script>";
	}else{
			echo "<script>
					alert('회원 등록 실패');
					location.replace('member_form.php');
					</script>";
	}

?>

