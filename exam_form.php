
<?php include "login_check.php"; ?>

<?php include "header.php"; ?>
<?php include "aside_exam.php"; ?>

<?php
    session_start();
    
    $id=$_SESSION['userid'];
    
    session_abort();
        
    //DB 회원번호 읽기
    include "connect_db.php";
    
    $sql="select no from member 
        where userid='".$id."'";
    
    $res=mysqli_query($conn, $sql);
    
    while($rows=mysqli_fetch_array($res)){
        $no=$rows['no'];
    }
    
    $subno=$_GET['subno'];
    
    $sql="select * from subject
        where subno='".$subno."'";
    
    $res=mysqli_query($conn, $sql);
    
    while($rows=mysqli_fetch_array($res)){
        $name=$rows['name'];            //과목명
        $evaldate=$rows['evaldate'];    //평가일        
        $file=$rows['file'];            //문제 파일명
    }  
    
    mysqli_close($conn);
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
	<h2>시험정보</h2>

<form role="myform" action="upload.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="no" value="<?php echo $no;?>">
	<input type="hidden" name="subno" value="<?php echo $subno;?>">
<table>
	<tr>
		<td>과목명</td>
		<td>
			<?php echo $name;?>
		</td>
	</tr>	
	<tr>
		<td>문제 파일명</td>
		<td>
			<a href=download.php?file=<?php echo str_replace(" ","+", $file);?>&path=<?php echo "./save/exam/";?>><?php echo $file;?></a>
		</td>
	</tr>
	<tr>
		<td>내용</td>
		<td>
			<textarea name="content" cols=40 rows=10></textarea>
		</td>
	</tr>
	<tr>
		<td>제출 파일</td>
		<td>
			<input type="file" name="file" value="<?php echo $file;?>">
		</td>
	</tr>	
		
	<tr>
		<td colspan=2>
			<button type="button" class="btn btn-warning">제출</button> 			
			<button type="button" class="btn btn-primary">목록</button> 
		</td>
	</tr>
</table>
</form>
</article>

<script src="http://code.jquery.com/jquery-latest.js">
</script>
<SCRIPT>
$(document).ready(function(){	
	var formObj=$("form[role='myform']");

	//제출
	$(".btn-warning").on("click",function(){		
		formObj.submit();
	});
	//목록
	$(".btn-primary").on("click",function(){
		formObj.attr("action","exam1.php");		
		formObj.submit();
	});
});
</SCRIPT>

<?php include "footer.php" ?>

