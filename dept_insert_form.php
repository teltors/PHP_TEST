<?php include "header.php" ?>
<?php include "aside_exam.php" ?>

<style>
    h2{
        margin:20px 20px 40px 20px;
        padding:10px;
        border-bottom:1px solid #ccc;
    }
    table{
        border-collapse:collapse;        
    }
    .table{
        width:400px;        
        margin:0 auto;        
    } 
    th,td{
        border:1px solid #ccc;       
        text-align:center;
        font-size:13px;
    }   
    td:nth-child(1){
        font-weight:bold;
    }
    input{
        width:250px;
        margin:0;
    }
</style>

<article>
	<h2>과정등록</h2>

<form name="form" action="" method="post">
			
<table class="table">
	<tbody>
	<tr>
		<td>과정명</td>
		<td>
			<input type="text" name="dname">
		</td>
	</tr>
	<tr>
		<td>지도교수</td>
		<td>
			<input type="text" name="pname">
		</td>
	</tr>
	<tr>
		<td>시작일</td>
		<td>
			<input type="text" name="sdate">
		</td>
	</tr>
	<tr>
		<td>종료일</td>
		<td>
			<input type="text" name="edate">
		</td>
	</tr>	
	<tr>
		<td colspan=2>
			<button type="button" class="btn btn-warning">등록</button> 			
			<button type="button" class="btn btn-primary">목록</button> 
		</td>
	</tr>
	</tbody>
</table>
</form>
</article>

<script src="http://code.jquery.com/jquery-latest.js">
</script>
<script>
$(document).ready(function(){
	var formObj=$("form[name='form']");
    
    //수정
    $(".btn-warning").on("click",function(){
    	formObj.attr("action","dept_insert_process.php");
    	formObj.submit();
    });
    //목록
    $(".btn-primary").on("click",function(){
    	formObj.attr("action","exam4.php");		
    	formObj.submit();
    });
});
</script>

<?php include "footer.php" ?>
