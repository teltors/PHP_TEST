<?php 
$num=$_GET['subno'];

echo "번호 : ".$num."<br>";

$conn=mysqli_connect("localhost","root","123456");
mysqli_select_db($conn,'shop_db');

$sql="select * from subject where subno=".$num;
$rs=mysqli_query($conn, $sql);
$rows=mysqli_fetch_array($rs);
?>

<form role="myform" action="sample_board3.php" method="post">
	<input type="hidden" name="subno" value="<?php echo $num;?>">
	<input type="text" name="name" value="<?php echo $rows['name'];?>">
	<button type="button" class="btn-warning">변경</button>
</form>
<?php 
echo "<br>";
echo "평가일 : " . $rows['evaldate']."<br>";
echo "문제파일 : " . $rows['file']."<br>";
echo "답안파일 : " . $rows['file2']."<br>";
echo "학과번호 : " . $rows['deptno']."<br>";

?>
<script src="http://code.jquery.com/jquery-latest.js">
</script>
<script>
$(document).ready(function(){	
	var formObj=$("form[role='myform']");
	//제출
	$(".btn-warning").on("click",function(){				
		formObj.submit();
	});	
});
</script>










