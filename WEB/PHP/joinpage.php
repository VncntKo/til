<?php
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
		background-color:#fff;
		margin:0 auto;
		height: auto;		
	}
	p { margin:0; }
	
	#tophead
	{
		width:100%;
		height:100%;
		margin:0 auto;
		
		background-color:#fff;
		text-align:center;
	}
	#banner
	{
		width:100%;
		height:15%;
		
		background-color:#fff;
	}
	#banner_mobile
	{
		width:100%;
		height:7%;
		
		background-color:#fff;
	}
	#login
	{
		width:40%;
		height:100%;
		background-color:#fff;
		margin:0 auto;
		float:right;
	}
	#login_mobile
	{
		width:60%;
		height:100%;
		background-color:#fff;
		margin:0 auto;
		float:right;
	}
	#wrap
	{
		width:100%;
		height:92%;
		margin:0% auto;
		text-align:center;
	}
	#container
	{
		width:90%;
		height:100%;
		background-color:#fff;
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
		
		text-align: center;
	}
	#btn
	button:hover{
		color:white;
		background-color: #aaa;
	}
	#btn
	input{
		border-top-left-radius: 5px; 
		border-top-right-radius: 5px; 
		border-bottom-left-radius: 5px; 
		border-bottom-right-radius: 5px; 
		
		border: 1px solid #000;
		background-color: #fff;
		color: #000;
		
		font-size:110%;
		float:center;
		
		width : 10%;
		height : 5%;
		text-align: left;
		
		margin-bottom:4px;	
		position:static;
	}
	#btn
	input:hover{
		color:white;
		background-color: #aaa;
	}	
	#m_btn
	button{
		border-top-left-radius: 5px; 
		border-top-right-radius: 5px; 
		border-bottom-left-radius: 5px; 
		border-bottom-right-radius: 5px; 
		
		border: 1px solid #000;
		background-color: #fff;
		color: #000;
		
		font-size:110%;
		
		text-align: center;
	}
	#m_btn
	button:hover{
		color:white;
		background-color: #aaa;
	}
	#m_btn
	input{
		border-top-left-radius: 5px; 
		border-top-right-radius: 5px; 
		border-bottom-left-radius: 5px; 
		border-bottom-right-radius: 5px; 
		
		border: 1px solid #000;
		background-color: #fff;
		color: #000;
		
		font-size:110%;
		float:left;
		
		width : 100%;
		height :100%;
		text-align: left;
		
		margin-bottom:4px;	
		position:static;
	}
	#m_btn
	input:hover{
		color:white;
		background-color: #aaa;
	}
	#btn_resykler{
	}
	#btn_tutor{
		margin-top: -5px;
		margin-right:15%;
		text-align: center;
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
			padding-top:5px;
			
			margin-left: 0%;
		}
		.setup_msg
		{
			text-align:middle;
			color:#fff;
			font-weight:bold;
			padding-bottom:0.2%;
			font-size:209%;
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
<?php
	$pc = false;
	if (preg_match("/(android|avantgo|iPhone|Opera Mini|blackberry|bolt|boost|cricket
	|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])){
	}
	else{
		$pc = true;
	}
	
	if ($pc){
?>
	<div id="tophead">
			<div id = "banner">
				<div class="logo">
					<a href="http://506lab.iptime.org:8080">
						<img src="../img/506logo3.png" width="20%" align="left" style="margin-left:8%;margin-top:1.5%;"/>
					</a>
				</div>
			</div>
			<hr style="border: solid 1px black;">
			<div style="width:30%; height:50%; display: inline-block; text-align:center;";>
				<form name="join" method="post" action="memberSave.php">
				<h1>정보 입력</h1>				
				<h3>실제 이름과 학번을 사용하세요</h3>
				<h6>비밀번호는 암호화됩니다.</h6>
				
				<table class="info_table"  style="margin:auto;">
				  <tr>
				   <td width="12">아이디</td>
				   <td><input type="text" size="11" name="id" style="margin-left:10px;"></td>
				  </tr>
				  <tr>
				   <td>비밀번호</td>
				   <td><input type="password" size="11" name="pwd" style="margin-left:10px;"></td>
				  </tr>
				  <tr>
				   <td>비밀번호 확인</td>
				   <td><input type="password" size="11" name="pwd2" style="margin-left:10px;"></td>
				  </tr>
				  <tr>
				  <td></td>
				  <tr>
				  <td></td>
				  </tr>
				  </tr>
				  <tr>
				   <td>이름</td>
				   <td><input type="text" size="11" maxlength="10" name="name"  style="margin-left:10px;"></td>
				  </tr>
				  <tr>
				   <td>학번</td>
				   <td><input type="text" size="11" name="stuid"  style="margin-left:10px;"></td>
				  </tr>
				 </table><br><br>
				 <div id="btn">	
					 <input type=submit value="등록" style="text-align:center; font-size:13px;">
					 <input type=reset value="지우기" style="text-align:center; font-size:13px;">
				 </div>
			</form>
			</div>
	</div>
	<?php
	}
	else{	//mobile
?>
	<div id="tophead">
		<div id = "banner_mobile">
			<div class="logo">
				<a href="http://506lab.iptime.org:8080">
					<img src="../img/506logo3.png" width="35%" align="left" style="margin-left:2%; margin-top:3%; display: inline-block;">
				</a>
			</div>
			<br><br>
			<hr style="border: solid 1px black;">
			<div style="width:70%; height:100%; display: inline-block; text-align:center;">
				<form name="join" method="post" action="memberSave.php">
				<h1>정보 입력</h1>
				<h3>실제 이름과 학번을 사용하세요</h3>
				<h6>비밀번호는 암호화됩니다.</h6>
				<table class="info_table"  style="margin:auto;">
				  <tr>
				   <td width="12">아이디</td>
				   <td><input type="text" size="11" name="id" style="margin-left:10px;"></td>
				  </tr>
				  <tr>
				   <td>비밀번호</td>
				   <td><input type="password" size="11" name="pwd" style="margin-left:10px;"></td>
				  </tr>
				  <tr>
				   <td>비밀번호 확인</td>
				   <td><input type="password" size="11" name="pwd2" style="margin-left:10px;"></td>
				  </tr>
				  <tr>
				  <td></td>
				  <tr>
				  <td></td>
				  </tr>
				  </tr>
				  <tr>
				   <td>이름</td>
				   <td><input type="text" size="11" maxlength="10" name="name"  style="margin-left:10px;"></td>
				  </tr>
				  <tr>
				   <td>학번</td>
				   <td><input type="text" size="11" name="stuid"  style="margin-left:10px;"></td>
				  </tr>
				 </table><br><br>
				 <div id="m_btn" style="height:100%; width:50%; display: inline-block;">	
					<div style="height:80%; display: inline-block;">	
						<input type=submit value="등록">
					</div>
					<div style="height:80%; display: inline-block;">	
						<input type=reset value="지우기">
					</div>
				 </div>
				</form>
			</div>
		</div>
	</div>
	<?php
	}
	?>
</body>
</html>
