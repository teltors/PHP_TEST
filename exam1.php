<?php include "header.php" ?>
<?php include "aside_exam.php" ?>

<style>      
   h2{
    margin:20px;
   }
   table{
       border-collapse:collapse;           
   }
   th,td{
       border:1px solid #ccc;       
       text-align:center;
       font-size:14px;
   }   
   .table{
        width:700px;
        margin-left:10px;
   }
</style>

<article>

<h2>시험정보</h2>
  
  <table class="table">
  	<thead class="thead-dark">
  	<tr>
  		<th>과목번호</th>
  		<th>과목명</th>
  		<th>평가일</th>
  		<th>응시확인</th>  			
  	</tr>
  	</thead>
	
	<tbody>
<?php 
include "connect_db.php";

$sql="select * from subject        
        order by evaldate";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_fields($result);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";        
    echo "<td>{$rows['subno']}</td>";
    echo "<td><a href=exam_form.php?subno={$rows['subno']}>{$rows['name']}</a></td>";
    echo "<td>{$rows['evaldate']}</td>";
    
    /* $check=$rows['exam'];
    if($check==0){
        echo "<td style='color:red'>미응시</td>";
    }else{
        echo "<td>응시</td>";
    } */
    
    echo "</tr>";
}
?>
	</tbody>
  </table>
  
</article>

<?php include "footer.php" ?>

