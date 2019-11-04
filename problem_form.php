
<?php include "login_check.php"; ?>

<?php include "header.php"; ?>
<?php include "aside_exam.php"; ?>
<?php include "connect_db.php"; ?>

<style>
	table{
        border-collapse:collapse;
	}
	td{
		border:1px solid #ccc;
	}   
</style>

<article>
	<h2>문제등록</h2>

<form name="form" role="myform" action="upload.php" method="post" enctype="multipart/form-data">
			
<table>
	<tr>
		<td>과목명</td>
		<td>
			<input type="text" name="name" value="">
		</td>
	</tr>	
	<tr>
		<td>평가일</td>
		<td>
			<input type="datetime" name="evaldate" value="">
		</td>
	</tr>
	<tr>
		<td>문제 파일</td>
		<td>
			<input type="text" name="text1" id="fileCover" style="width:200px;">
        	<input type="file" name="file" id="files" style="display:none;">
        	<button type="button" id="file_btn" class="btn btn-outline-success btn-sm">선택</button>
        	<button type="button" id="cancel_btn" class="btn btn-outline-secondary btn-sm">취소</button>
		</td>
	</tr>
	<tr>
		<td>답안 파일</td>
		<td>
			<input type="text" name="text2" id="fileCover2" style="width:200px;">
        	<input type="file" name="file2" id="files2" style="display:none;">
        	<button type="button" id="file_btn2" class="btn btn-outline-success btn-sm">선택</button>
        	<button type="button" id="cancel_btn2" class="btn btn-outline-secondary btn-sm">취소</button>
		</td>
	</tr>
	<tr>
		<td>과정명</td>
		<td>
			<select name="deptno">
        	<?php 
                $sql="select * from dept";
                $res=mysqli_query($conn, $sql);
                
                while($rows=mysqli_fetch_array($res)){  
                    echo "<option value={$rows['deptno']}>{$rows['dname']}</option>"; 
                }
                mysqli_close($conn);
            ?>
        	</select>
		</td>
	</tr>
		
	<tr>
		<td colspan=2>
			<button type="button" class="btn btn-warning">등록</button> 			
			<button type="button" class="btn btn-primary">목록</button> 
		</td>
	</tr>
</table>
</form>
</article>

<script src="http://code.jquery.com/jquery-latest.js">
</script>
<SCRIPT>
//document.ready 코드를 한번 쭉 읽고 완료가 되면..
$(document).ready(function(){	
	var formObj=$("form[role='myform']");

	//제출(파일 전송)
	$(".btn-warning").on("click",function(){
		formObj.attr("action","upload_file_sql.php");
		formObj.submit();
	});
	//목록
	$(".btn-primary").on("click",function(){
		formObj.attr("action","exam3.php");		
		formObj.submit();
	});

	//파일 선택
    $('#file_btn').click(function(){
    	$('#files').click();    
    });    
    $('#files').change(function(){
    	var a=$('#files').val();
     	a=a.replace("C:\\fakepath\\","");
// 		last=a.lastIndexOf("\\");
// 		alert(last);
// 		a=a.substring(last+1);
    	$('#fileCover').val(a);
    });
    $('#cancel_btn').click(function(){    	
    	$('#fileCover').val("");
    	$('#files').replaceWith($('#files').clone(true));    	
    });
//-------------------------------------------------------
    $('#file_btn2').click(function(){    	
    	$('#files2').click();    
    });    
    $('#files2').change(function(){
    	var a=$(this).val();
     	a=a.replace("C:\\fakepath\\","");
    	$('#fileCover2').val(a);
    });
    $('#cancel_btn2').click(function(){    	
    	$('#fileCover2').val("");
    	$('#files2').replaceWith($('#files2').clone(true));    	
    });
});
</SCRIPT>

<?php include "footer.php" ?>

