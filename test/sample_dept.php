<?php
include "connect_db.php";
?>

<form name="form" action="" method="post">
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
	<button type="button" class="btn-send">전송</button>
</form>

<script src="http://code.jquery.com/jquery-latest.js">
</script>

<script>
$(document).ready(function(){	
	var formObj=$("form[name='form']");

	//제출(파일 전송)
	$(".btn-send").on("click",function(){
		formObj.attr("action","sample_dept_res.php");
		formObj.submit();
	});
});
</script>