<!DOCTYPE HTML>
<HTML>
 <HEAD>
  <TITLE>  </TITLE>
  <META charset="utf-8">
	<link rel="stylesheet" href="">
	<style>
        #wrap{
            
        }
        table{
            position:absolute;
            top:50%;
            left:50%;
            margin-top:-100px;
            margin-left:-150px;
            border-collapse:collapse;
            width:300px;
            height:200px;
		}
		td{
			border:1px solid #ccc;
			text-align:center;
		}		
		tr:nth-child(1){
		    font-size:20px;
		    font-weight:bold;
		}
		input[name=userid],
		input[name=passwd]{
            width:200px;
            height:25px;
            font-size:20px;
		}
		button{
            width:80px;
            height:30px;
            background:#FF99FF;
            border-radius:16px;
            border:0;
		}
	</style>
 </HEAD>

 <BODY>
 	<div id="wrap">
		<form name="myform" action="loginProcess.php" method="post">
		<table>
			<tr>
				<td colspan=2>로그인</td>				
			</tr>
			<tr>
				<td>아이디</td>
				<td>
					<input type="text" name="userid">
				</td>
			</tr>
			<tr>
				<td>비밀번호</td>
				<td>
					<input type="password" name="passwd">
				</td>
			</tr>
			<tr>
				<td colspan=2>
					<button class="login">로그인</button> 
					<button class="join">회원가입</button>
				</td>
			</tr>
		</table>
		</form>
	</div>

 </BODY>
</HTML>

<script src="http://code.jquery.com/jquery-latest.js">
</script>
<SCRIPT>
$(document).ready(function(){
	var formObj=$("form[name='myform']");
	
	$(".login").on("click",function(){
		formObj.submit();
	});
	$(".join").on("click",function(){		
		formObj.attr("action","member_form.php");
		formObj.submit();
	});
});
</SCRIPT>