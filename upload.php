<?php
$no=$_POST['no'];
$subno=$_POST['subno'];
$content=$_POST['content'];
$content=iconv('UTF-8','iso-8859-1',$content);

$filename=$_FILES['file']['name'];
$filename=iconv('UTF-8','iso-8859-1',$filename);

/* echo "회원번호:{$no}<br>";
echo "과목번호:{$subno}<br>";
echo "내용:{$content}<br>";
echo "파일:{$filename}<br>"; */

include "connect_db.php";

//시험응시 체크
$sql="select * from sungjuk where no=".$no." and subno=".$subno;
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);

echo "행갯수:{$num}<br>";

if($num){
    //성적 수정(시험제출)
    $sql="update sungjuk 
        set content='".$content."',filename='".$filename.
        "' where no=$no and subno=$subno";
}else{
    //성적 추가(시험제출)
    $sql="insert into sungjuk(content,filename,no,subno)
   			values ('$content','$filename',$no,$subno)";
}

$res=mysqli_query($conn,$sql);
mysqli_close($conn);

echo "등록 완료<br>";

//파일업로드
$target_Dir = "./save/answer/";
$savedir=$target_Dir.$filename;

if(move_uploaded_file($_FILES['file']['tmp_name'],$savedir)){
    echo "<script>
        location.replace('exam1.php');
        </script>";      
}
else{    
    echo "<script>
        alert('업로드 실패');
        history.go(-1);
        </script>";
} 

?>