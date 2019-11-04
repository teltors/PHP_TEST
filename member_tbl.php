<?php
    include "connect_db.php";
    
    if($db){
        echo "[shop_db] 접속 완료<br>";
    }else{
        echo "[shop_db] 접속 실패<br>";
        exit;
    }
    
    $sql="create table member(
        no int primary key not null auto_increment,
        userid varchar(20) not null,        
        passwd varchar(20),
        name varchar(20) not null,
        birth varchar(20),
        phone varchar(20),        
        email varchar(30),
        use_p int default 0,
        grant_p int default 1)
        default charset=utf8";
    
    $result=mysqli_query($connect,$sql);
    if($result){
        echo "<p>[shop_db] 테이블 생성 성공</p>";        
        mysqli_close($connect);
    }else{
        echo "<p>[user_tbl] 테이블 이미 생성되었음</p>";        
    }

?>