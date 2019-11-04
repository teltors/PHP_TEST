<!DOCTYPE HTML>
<HTML>
 <HEAD>
  <TITLE> 회원가입 </TITLE>
  <META charset="utf-8">
	<link rel="stylesheet" href="">
	<style>
		table{
            border-collapse:collapse;
		}
		td{
			border:1px solid #ccc;
		}   
	</style>
 </HEAD>
 <BODY>

<h2>회원가입</h2>

<form role="myform" action="memberProcess.php" method="post" onsubmit="return chk_input()">
<table>
	<tr>
		<td colspan=2>회원 가입[*표는 반드시 기입할 사항입니다.]</td>
	</tr>
	<tr>
		<td>*아이디</td>
		<td>
			<input type="text" name="userid">			
		</td>
	</tr>	
	<tr>
		<td>*비밀번호</td>
		<td>
			<input type="password" name="pw1">
		</td>
	</tr>
	<tr>
		<td>*비밀번호 확인</td>
		<td>
			<input type="password" name="pw2">
		</td>
	</tr>
	<tr>
		<td>*이름</td>
		<td>
			<input type="text" name="name">
		</td>
	</tr>
	<tr>
		<td>*생년월일</td>
		<td>
			<input type="text" name="birth">
			(예: 19120102)
		</td>
	</tr>
	<tr>
		<td>연락처</td>
		<td>
			<input type="text" name="phone">
			(예: 01012345678)
		</td>
	</tr>
	<tr>
		<td>이메일</td>
		<td>
			<input type="text" name="email">
			(예: master@aaa.kr)
		</td>
	</tr>
	<tr>
		<td colspan=2>
			<button class="ok">가입하기</button> 
			<button class="cancel">취소하기</button>
		</td>
	</tr>
</table>
</form>

 </BODY>
</HTML>

<script src="http://code.jquery.com/jquery-latest.js">
</script>
<SCRIPT>
$(document).ready(function(){
	var formObj=$("form[role='myform']");
	
	$(".ok").on("click",function(){
		formObj.submit();
	});
	$(".cancel").on("click",function(){
		formObj.attr("action","login.php");
		formObj.attr("method","get");
		formObj.submit();
	});
});
</SCRIPT>

<script>

function chk_input(){
	if(myform.userid.value==""){
		alert("아이디를 입력하세요.");
		myform.userid.focus();
		return false;
	}	
	if(myform.pw1.value==""){
		alert("비밀번호를 입력하세요.");
		myform.pw1.focus();
		return false;
	}
	if(myform.pw2.value==""){
		alert("비밀번호 확인을 입력하세요.");
		myform.pw2.focus();
		return false;
	}
	if(myform.pw1.value != myform.pw2.value){
		alert("비밀번호 다릅니다.");
		myform.pw1.focus();
		myform.pw1.value="";
		myform.pw2.value="";
		return false;
	}
	if(myform.name.value==""){
		alert("이름을 입력하세요.");
		myform.name.focus();
		return false;
	}
	if(myform.birth.value==""){
		alert("생년월일을 입력하세요.");
		myform.birth.focus();
		return false;
	}
	return true;
}

</script>
