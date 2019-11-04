<?php include "login_check.php"; ?>

<?php include "header.php" ?>
<?php include "aside_member.php" ?>

<?php   
    
    /* if(isset($_GET['no'])){
        echo "있음";
    }else{
        echo "없음";
    } */        
        
    //DB 회원정보 읽기
    include "connect_db.php";
    
    $sql="select * from member where userid='".$userid."'";
    $res=mysqli_query($conn, $sql);
    
    while($rows=mysqli_fetch_array($res)){
        $no=$rows['no'];
        $userid=$rows['userid'];
        $passwd=$rows['passwd'];
        $name=$rows['name'];
        $birth=$rows['birth'];
        $phone=$rows['phone'];
        $email=$rows['email'];
    }  
?>
<style>
    h2{
        margin:20px;
   }  
	td:nth-child(1){
	   text-align:center;
	   font-weight:bold;
	}
	.table{
        width:400px;
        margin-left:16px;
   }
   input{
        width:240px;
   }
</style>

<article>
	<h2>회원정보</h2>

<form role="myform" action="" method="post">
	<input type="hidden" name="no" value="<?php echo $no;?>">
	
<table class="table table-bordered">
	<tbody>	
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
    		<td colspan=2>
    			<button class="btn btn-warning">수정</button>			 
    		</td>
    	</tr>
	</tbody>
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
});
</SCRIPT>
