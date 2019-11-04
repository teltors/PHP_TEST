<?php

$conn=mysqli_connect("192.168.0.102","root","123456");
mysqli_select_db($conn,'shop_db');

$sql="select subno,name,evaldate,file,file2,dname
        from subject s,dept d
        where s.deptno=d.deptno
        order by evaldate";

$rs=mysqli_query($conn, $sql);

while($rows=mysqli_fetch_array($rs)){
    $subno=$rows['subno'];
    $name=$rows['name'];
    
    echo $subno." ".
        "<a href='sample_board2.php?subno={$subno}'>".$name."</a> ".
        $rows['evaldate']." ".$rows['file']." ".
        $rows['file2']." ".$rows['dname'];
    echo "<br>";
}

?>


