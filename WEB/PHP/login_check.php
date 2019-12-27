<?
	ob_start() ;
	if( $_GET["page"] == "phpinfo" )
	{
		phpinfo();
		exit;
	}
	
	session_start(); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title> THIRD-LAB </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
	body
	{
		background-color:#272643;
		margin:0 auto;
	}
	p { margin:0; }

	#wrap
	{
		width:100%;
		height:100%;
		margin:0 auto;
		text-align:center;`
	}
	#container
	{
		width:100%;
		height:100%;
		background-color:#686889;
		margin:0 auto;
	}
	#btn
	button{
		border-top-left-radius: 5px; 
		border-top-right-radius: 5px; 
		border-bottom-left-radius: 5px; 
		border-bottom-right-radius: 5px; 
		
		
		border: 1px solid #000;
		background-color: #fff;
		color: #000;
		
		font-size:12pt;
		float:center;
		
		width : 110px;
		height : 27px;
		text-align: center;
		
		
		position:static;
	}
	#btn
	button:hover{
		color:white;
		background-color: #000;
	}
	#btn_resykler{
	}
	#btn_tutor{
		margin-top: -5px;
	}
	{
		width:70%;
		height:100%;
		background-color:#686889;
		margin:0 auto;
	}
		.logo
		{
			text-align:center;
			padding-top:40px;
			padding-bottom:40px;
		}
		.setup_msg
		{
			text-align:center;
			color:#fff;
			font-weight:bold;
			padding-bottom:0.2%;
			font-size:39pt;
		}
		.info_msg
		{
			font-size:9pt;
			color:#666;
			text-align:left;
			padding-left:10px;
		}

	.info_table td
	{
		font-size:9pt;
		padding-top:8px;
		padding-bottom:5px;
		color:#666;
	}
		.info_category
		{
			background-color:#ececec;
			padding-left:10px;
		}
		.info_bg
		{
			background-color:#FFF;
			padding-left:10px;
		}

		.go_home
		{
			text-align:center;
			padding-top:20px;
			padding-bottom:20px;
		}

		.copy
		{
			background-color:#f3f3f3;
			padding-top:10px;
			height:35px;
			font-family:verdana,tahoma;
			text-align:center;
			font-size:8pt;
		}

	.c_00 { color:#000; }
	.c_red { color:#9e0b0f; }
	.p_b10 { padding-bottom:10px; }
</style>
</head>

<body>
<div id="wrap">
	<div id="container" align="center">
	<div align="center">
	<?php
		$host = 'localhost';
		$user = 'root';
		$pw = 'apmsetup';
		$dbName = 'algorithm';
		//$mysqli = new mysqli($host, $user, $pw, $dbName);
		
		$conn = mysqli_connect($host, $user, $pw, $dbName);
		mysqli_set_charset($conn, "utf-8");	
		
		if($conn){
			//echo "MySQL success";
		}else{
			echo "MySQL fail";
		}
		$conn->query("set names utf8");
		
		$id = $_POST['id'];
		$pwd = $_POST['pw'];
		
		$hashed = base64_encode(hash('sha256', $pwd, true));
		$pwd = substr($hashed,0, 15);
		
		$bring_query = "select * from member";
		$result = mysqli_query($conn, $bring_query);
		
		$login = false;
		while($row = mysqli_fetch_array($result)){	
			if (($row[id] == $id) and ($row[pw] == $pwd) ){
				$login = true;
				$stuid = $row['student_id'];
				$name = $row['name'];
			}
		}
		if ($login){
			echo '<script>alert("로그인 성공");</script>';
			$_SESSION['userid']=$id;
			$_SESSION['username']=$name;
			$_SESSION['userstuid']=$stuid;
			
			if (isset($_SESSION['userid'])){
				header ('Location: http://506lab.iptime.org:8080/index.php');
			}
			else{
				echo '<script>alert("저장 실패");</script>';
			}
		}
		else {
			echo $pwd;
			echo '<script>alert("존재하지 않는 아이디나 비밀번호");</script>';
	?>
				<script type="text/javascript">
					location.href="../index.php";
				</script>
	<?php
		}	
		mysqli_close($conn);
	?>
</body>
</html>
