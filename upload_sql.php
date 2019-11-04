<?php
$filename=$_FILES['file']['name'];
$filename=iconv('UTF-8','iso-8859-1',$filename);

$filename2=$_FILES['file2']['name'];
$filename2=iconv('UTF-8','iso-8859-1',$filename2);

include "connect_db.php";

//문제 추가
if($filename != "" || $filename2 != ""){
    $sql="insert into subject (file,file2) 
            values ('$filename','$filename2')";
    $res=mysqli_query($conn,$sql);
    mysqli_close($conn);
    
    if($res==1){
        echo "문제 추가 성공<br>";
    }else{
        echo "문제 추가 실패<br>";
    }
}
echo "프로그램 종료";
?>