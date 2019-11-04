<?php
?>

<form name="form" role="myform" action="" 
		method="post" enctype="multipart/form-data">
	<input type="text" name="text1" id="fileCover" style="width:200px;">
	<input type="file" name="file" id="files">
	<button type="button" id="file_btn">파일1</button>
	<button type="button" id="cancel_btn">취소</button>	
	<hr>
	<input type="text" name="text2" id="fileCover2" style="width:200px;">
	<input type="file" name="file2" id="files2">
	<button type="button" id="file_btn2">파일2</button>
	<button type="button" id="cancel_btn2">취소</button>	
	<hr>
	<button type="button" id="send_btn">업로드</button>
</form>

<script src="http://code.jquery.com/jquery-latest.js">
</script>
<script>
$(document).ready(function(){
	var formObj=$("form[role='myform']");
	
	$("#send_btn").on("click",function(){	
		formObj.attr("action","upload_file_sql.php");	
		formObj.submit();
	});
	
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
</script>