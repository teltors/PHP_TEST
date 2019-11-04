<?php include "header.php" ?>
<?php include "aside_member.php" ?>

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
   }   
   .table{
        width:760px;
        margin-left:16px;
   }
</style>

<article>

<h2>회원목록</h2>
  
  <table class="table">
  	<thead class="thead-dark">
  	<tr>
  		<th>번호</th>
  		<th>아이디</th>
  		<th>이름</th>
  		<th>생년월일</th>
  		<th>연락처</th>
  		<th>이메일</th>
  		<th>사용신청</th>
  		<th>사용권한</th>  		
  	</tr>
  	</thead>
	
	<tbody>
<?php 
include "connect_db.php";

$sql="select * from member order by no desc";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_fields($result);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";        
    echo "<td>{$rows['no']}</td>";
    echo "<td><a href=member2.php?no={$rows['no']}>{$rows['userid']}</a></td>";
    echo "<td>{$rows['name']}</td>";
    echo "<td>{$rows['birth']}</td>";
    echo "<td>{$rows['phone']}</td>";
    echo "<td>{$rows['email']}</td>";
    
    if($rows['use_p']==0){
        $use="신청중";
        echo "<td style='color:red'>{$use}</td>";
    }else{
        $use="사용";
        echo "<td>{$use}</td>";
    }    
        
    if($rows['grant_p']==1){
        $grant="학생";
    }else if($rows['grant_p']==2){
        $grant="교사";
    }else{
        $grant="관리자";
    }
    echo "<td>{$grant}</td>";
    echo "</tr>";
}
?>
	</tbody>
  </table>
  
</article>

<?php include "footer.php" ?>

