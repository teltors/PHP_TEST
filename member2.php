
<?php include "login_check.php"; ?>

<?php include "header.php"; ?>
<?php include "aside_member.php"; ?>

<?php
    session_start();
    
    $id=$_SESSION['userid'];
    
    session_abort();
        
    //DB 회원정보 읽기
    include "connect_db.php";
    
    $no=$_GET['no'];
    
    $sql="select * from member,dept 
        where member.deptno=dept.deptno and no='".$no."'";
    
    $res=mysqli_query($conn, $sql);
    
    while($rows=mysqli_fetch_array($res)){
        $no=$rows['no'];
        $userid=$rows['userid'];
        $passwd=$rows['passwd'];
        $name=$rows['name'];
        $birth=$rows['birth'];
        $phone=$rows['phone'];
        $email=$rows['email'];
        $use_p=$rows['use_p'];        
        $dname=$rows['dname'];
    }  
?>
<style>
	table{
        border-collapse:collapse;
	}
	td{
		border:1px solid #ccc;
	}   
</style>

<article>
	<h2>회원정보</h2>

<form role="myform" action="" method="post">
	<input type="hidden" name="no" value="<?php echo $no;?>">
	<input type="hidden" name="use_p" value="<?php echo $use_p;?>">
	<input type="hidden" name="grant_p" value="<?php echo $grant_p;?>">
<table>
	<tr>
		<td>아이디</td>
		<td>
			<input type="text" name="userid" readonly value="<?php echo $userid;?>">			
		</td>
	</tr>	
	<tr>
		<td>비밀번호</td>
		<td>
			<input type="password" name="pw1" value="<?php echo $passwd;?>">
		</td>
	</tr>
	<tr>
		<td>비밀번호 확인</td>
		<td>
			<input type="password" name="pw2" value="<?php echo $passwd;?>">
		</td>
	</tr>
	<tr>
		<td>이름</td>
		<td>
			<input type="text" name="name" readonly value="<?php echo $name;?>">
		</td>
	</tr>
	<tr>
		<td>생년월일</td>
		<td>
			<input type="text" name="birth" value="<?php echo $birth;?>">
		</td>
	</tr>
	<tr>
		<td>연락처</td>
		<td>
			<input type="text" name="phone" value="<?php echo $phone;?>">
		</td>
	</tr>
	<tr>
		<td>이메일</td>
		<td>
			<input type="text" name="email" value="<?php echo $email;?>">
		</td>
	</tr>
	<tr>
		<td>사용신청</td>
		<td>
			<?php 
			if($use_p==1){
			    echo "<input type='radio' name='use_p' value='1' checked>예";
			    echo "<input type='radio' name='use_p' value='0'>아니오";
			}else{
			    echo "<input type='radio' name='use_p' value='1'>예";
			    echo "<input type='radio' name='use_p' value='0' checked>아니오";
			}			
			?>
		</td>
	</tr>
	<tr>
		<td>학과</td>
		<td>
			<input type="text" name="dname" readonly value="<?php echo $dname;?>">
		</td>
	</tr>	
	
	<?php
	$sql="select grant_p from member where userid='".$id."'";
	$res=mysqli_query($conn, $sql);
	
	while($rows=mysqli_fetch_array($res)){
	    $grant_p=$rows['grant_p'];
	}
	
	if($grant_p==3){	
	    echo "<tr>";
	    echo "<td>권한설정</td>";
	    echo "<td>";
	    
		if($grant_p==3){
		    echo "<input type='radio' name='grant_p' value='1'>학생";
		    echo "<input type='radio' name='grant_p' value='2'>교사";
		    echo "<input type='radio' name='grant_p' value='3' checked>관리자";
		}if($grant_p==2){
		    echo "<input type='radio' name='grant_p' value='1'>학생";
		    echo "<input type='radio' name='grant_p' value='2' checked>교사";
		    echo "<input type='radio' name='grant_p' value='3'>관리자";
		}else{
		    echo "<input type='radio' name='grant_p' value='1' checked>학생";
		    echo "<input type='radio' name='grant_p' value='2'>교사";
		    echo "<input type='radio' name='grant_p' value='3'>관리자";
		}
		
	   echo "</td>";
	   echo "</tr>";
	}
	?>
	
	<tr>
		<td colspan=2>
			<button class="btn btn-warning">수정</button> 
			<button class="btn btn-danger">삭제</button> 
			<button class="btn btn-primary">목록</button> 
		</td>
	</tr>
</table>
</form>
</article>

<?php include "footer.php" ?>

<script src="http://code.jquery.com/jquery-latest.js">
</script>
<SCRIPT>
$(document).ready(function(){	
	var formObj=$("form[role='myform']");

	//수정
	$(".btn-warning").on("click",function(){
		formObj.attr("action","memberUpdate.php");
		formObj.submit();
	});
	//삭제
	$(".btn-danger").on("click",function(){
		formObj.attr("action","memberDelete.php");		
		formObj.submit();
	});
	//목록
	$(".btn-primary").on("click",function(){
		formObj.attr("action","memberList.php");		
		formObj.submit();
	});
});
</SCRIPT>
