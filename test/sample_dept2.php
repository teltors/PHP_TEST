
<select name="deptno" id=sel>
	<option value=1>스마트웹</option>
	<option value=2>자바</option>
	<option value=3>빅데이터</option>
	<option value=4>네트워크</option>
</select>

<script src="http://code.jquery.com/jquery-latest.js">
</script>
<?php
    $a=$_GET['deptno'];
    $a--;
    echo "<script>
        $(document).ready(function(){
        	$('#sel option:eq({$a})').attr('selected','selected');
        });
        </script>";
?>
