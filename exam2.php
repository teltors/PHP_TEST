<?php include "header.php" ?>
<?php include "aside_exam.php" ?>

<?php include "connect_db.php" ?>

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

<h2>성적확인</h2>
  
  <form name="form" action="" method="post">
  	<select name="deptno">
    <?php 
    $sql="select * from dept";
    $res=mysqli_query($conn, $sql);
    
    while($rows=mysqli_fetch_array($res)){
    	echo "<option value={$rows['deptno']}>{$rows['dname']}</option>";
    }
    ?>
    </select>
  	<button type="button" class="btn btn-primary">과정검색</button>
  </form>
  
  <table class="table">
  	<thead class="thead-dark">
  	<tr>
  		<th>과정명</th>
  		<th>과목명</th>
  		<th>평가일</th>
  		<th>지도교수</th>  			
  	</tr>
  	</thead>
	
	<tbody>
<?php 

$sql="SELECT d.deptno,dname,name,evaldate,pname
        FROM dept d,subject s
        where d.deptno=s.deptno ";

        if(isset($_POST['deptno'])){
          $deptno=$_POST['deptno'];
          $sql=$sql."and d.deptno={$deptno} ";  
        }
        
$sql=$sql."order by sdate desc";
$res=mysqli_query($conn, $sql);

while($rows=mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td><a href=exam2_dept.php?deptno={$rows['deptno']}>{$rows['dname']}</a></td>";
    echo "<td>{$rows['name']}</td>";
    echo "<td>{$rows['evaldate']}</td>";
    echo "<td>{$rows['pname']}</td>";    
    echo "</tr>";
}
?>
	</tbody>
  </table>
  
</article>

<script src="http://code.jquery.com/jquery-latest.js">
</script>
<SCRIPT>
$(document).ready(function(){
	var formObj=$("form[name='form']");

	//다시 실행
	$(".btn-primary").on("click",function(){
		formObj.attr("action","exam2.php");
		formObj.submit();
	});
});
</script>
<?php include "footer.php" ?>

