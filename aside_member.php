<?php               
    session_start(); 
    
    $userid=$_SESSION['userid'];
    
    session_abort();
    
    include "connect_db.php";
    
    $sql="select grant_p from member where userid='".$userid."'";
    $res=mysqli_query($conn, $sql);
    
    while($rows=mysqli_fetch_array($res)){        
        $grant_p=$rows['grant_p'];        
    }  
    
?>

<aside>
	<ul>
		<li><a href='member1.php'>본인 정보</a></li>
		<?php 	
		if($grant_p>=2){
		    echo "<li><a href='memberList.php'>학생 정보</a></li>";
		}
		if($grant_p==3){
		    echo "<li><a href='memberListAll.php'>전체 정보</a></li>";
		}		
		?>
	</ul>
</aside>