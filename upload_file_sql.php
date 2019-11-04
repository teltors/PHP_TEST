<?php

$name=$_POST['name'];
$name=iconv('UTF-8','iso-8859-1',$name);

$evaldate=$_POST['evaldate'];
$deptno=$_POST['deptno'];

$filename=$_FILES['file']['name'];
$filename=iconv('UTF-8','iso-8859-1',$filename);

$filename2=$_FILES['file2']['name'];
$filename2=iconv('UTF-8','iso-8859-1',$filename2);

include "connect_db.php";

//문제 추가
if($filename != "" || $filename2 != ""){
    $sql="insert into subject (name,evaldate,file,file2,deptno)
            values ('$name','$evaldate','$filename','$filename2',$deptno)";
    $res=mysqli_query($conn,$sql);
    mysqli_close($conn);
    
    if($res==1){
        echo "DB 문제 추가 성공<br>";
        
        //파일업로드
        $dir = "./save/problem/";
        $savedir=$dir.$filename;
        
        if(move_uploaded_file($_FILES['file']['tmp_name'],$savedir)){
            echo "파일1 업로드 성공<br>";
        }
        else{
            echo "파일1 업로드 실패<br>";
        }
        //----------------------------------------------
        $dir2 = "./save/answer/";
        $savedir2=$dir2.$filename2;
        
        if(move_uploaded_file($_FILES['file2']['tmp_name'],$savedir2)){
            echo "파일2 업로드 성공<br>";
        }
        else{
            echo "파일2 업로드 실패<br>";
        }
        
    }else{
        echo "DB 문제 추가 실패<br>";
    }
}
echo "프로그램 종료";
echo "<script>
        location.replace('exam3.php');
        </script>";
    
?>