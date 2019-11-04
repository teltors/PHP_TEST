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
       font-size:13px;
   }   
   .table{
        width:820px;
        margin-left:10px;
   }
   #btn-right{
        text-align:right;        
        margin:10px;
        padding:0 5px;
   }
</style>

<article>

<h2>과정정보</h2>
  <div id="btn-right">
  	<a href="dept_insert_form.php" class="btn btn-info btn-sm">과정등록</a>
  </div>
  
  <table class="table">
  	<thead class="thead-dark">
  	<tr>
  		<th>과정번호</th>
  		<th>과정명</th>
  		<th>지도교수</th>
  		<th>시작일</th>
  		<th>종료일</th>
  	</tr>
  	</thead>
	
	<tbody>
<?php 
include "connect_db.php";

$sql="select * from dept
        order by deptno desc";
$result=mysqli_query($conn, $sql);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";        
    echo "<td>{$rows['deptno']}</td>";
    echo "<td><a href=dept_update_form.php?deptno={$rows['deptno']}>{$rows['dname']}</a></td>";
    echo "<td>{$rows['pname']}</td>";
    echo "<td>{$rows['sdate']}</td>";
    echo "<td>{$rows['edate']}</td>";
    echo "</tr>";
}
?>
	</tbody>
  </table>
  
</article>

<?php include "footer.php" ?>

