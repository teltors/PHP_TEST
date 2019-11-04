<!DOCTYPE HTML>
<HTML>
 <HEAD>
  <TITLE>  </TITLE>
  <META charset="utf-8">
	
	<style>
		body{
			margin:0;
		}
		#wrap{
			width:1000px;
			margin:0 auto;
		}
		header{
			height:100px;
			border:1px solid #ccc;
			border-top:none;
		}
		#logo{
			position:relative;
			top:10px;
			left:10px;
			width:100px;
			height:30px;
			background:#FF6600;
		}
		nav{
			position:relative;
			top:20px;
			left:300px;
			width:600px;
			height:30px;			
		}
		nav ul{
			list-style:none;
			padding:0;
		}
		nav ul li{
			float:left;			
		}
		nav ul li a{
			display:block;
			text-decoration:none;			
			font-size:20px;
			font-weight:bold;
			padding:5px 20px;
			margin:-20px 20px 0 20px;	
			background:#00f;
			color:#fff;
			line-height:30px;
			border-radius:20px;
		}
		nav ul li a:hover{
			background:#FF9900;
		}

		aside{
			width:160px;
			height:600px;
			border:1px solid #ccc;
			border-top:none;
			float:left;
		}
		aside ul{
			list-style:none;			
			padding:0;
			margin:50px 0 0 0;			
		}
		aside ul li{			
			margin:30px;
		}
		aside ul li a{
			display:block;
			text-decoration:none;			
			font-size:20px;
			font-weight:bold;			
			line-height:30px;
			color:#000;
			text-align:center;
		}
		aside ul li a:hover{
			background:#0f0;
		}

		article{
			width:840px;
			height:600px;
			border-right:1px solid #ccc;
			border-bottom:1px solid #ccc;
			float:left;
		}
		.clear{
			clear:both;
		}
	</style>
	<link rel="stylesheet" href="css/bootstrap.min.css">
 </HEAD>
 
 <BODY>
	<div id="wrap">
		<header>
			<div id="logo"><a href="login.php">정보시스템</a></div>
			<nav>
				<ul>					
					<li><a href="exam1.php">시험정보</a></li>
					<li><a href="survey1.php">설문조사</a></li>
					<li><a href="member1.php">회원정보</a></li>
				</ul>
			</nav>
		</header>
