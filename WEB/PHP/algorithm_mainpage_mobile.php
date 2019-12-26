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
		height:25%;
		
		background-color:#fff;
	}
	#banner_mobile
	{
		width:100%;
		height:13%;
		
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
		width:70%;
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
		width:100%;
		height:100%;
		background-color:#fff;
		margin:0 auto;
	}
	#board
	{
		width:100%;
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
		
		font-size:2.8vmin;
		
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
		
		font-size:1.8vmin;
		float:right;
		
		width : 70%;
		height : 25%;
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
	#solve
	{
	  height:100%;
	  width:50%;
	  float:left;
	  margin-left:10px;
	}
	#solve_mobile
	{
	  height:50%;
	  width:80%;
	  float:left;
	  margin-left:10px;
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
		font-size:110%;
		padding-top:8px;
		padding-bottom:5px;
		color:#000;
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
		.verticalLine {
		  border-left: thick solid #aaaaaa;
		  border-right: thick solid #aaaaaa;		  
		  height:100%;
		}
	.c_00 { color:#000; }
	.c_red { color:#9e0b0f; }
	.p_b10 { padding-bottom:10px; }
</style>
</head>
<body>

<?php
	include('./solve/connect_solve.php');			
	$select_query = "select * from solve where number = '001';";
	$result = mysqli_query($conn, $select_query);	
	
	$open = 0;
	$solved = 0;
	$recom = 0;	
	while($row = mysqli_fetch_array($result)){
		$open = $row[open];
		$solved = $row[solved];
		$recom = $row[recommend];
	}
?>
<div id="tophead">			
	<?php		
	if(isset($_SESSION['userid'])){				
	?>			
		<div id = "banner_mobile">
			<div class="logo">
				<a href="http://506lab.iptime.org:8080">
					<img src="../img/506logo.png" width="17%" align="left" style="margin-left:5%; display: inline-block;">
				</a>
			</div>
			
			<div id="login_mobile">
				<div style="width: 80%; height: 100%; font-size:50%;">
					<table cellpadding="0" cellspacing="0" border="0" width="0%"
						style="text-align:center;table-layout:fixed; border-collapse: collapse;" class="info_table_mobile">
						<tr>
						   <td>아이디</td>
						   <td><?php echo $_SESSION['userid']; ?></td>
						</tr>
						<tr>
						   <td>이름</td>
						   <td><?php echo $_SESSION['username']; ?></td>
						</tr>
						<tr>
						   <td>학번</td>
						   <td><?php echo $_SESSION['userstuid']; ?></td>
						</tr>	
					
						<div id="btn" style="width: 30%; height: 100%; float:right; font-size:130%; margin-top:1%;">
							<button onClick="location.href='./logout.php';" style="margin-top:10%;">로그아웃</button>
						</div>								
					</table>
				</div>	
			</div>
		</div>		
		<hr style="border: solid 1px black;">
	<?php
		}
		else{
	?>
		<div id = "banner_mobile">
			<div class="logo">
				<a href="http://506lab.iptime.org:8080">
					<img src="../img/506logo.png" width="17%" align="left" style="margin-left:5%; display: inline-block;">
				</a>
			</div>
			<div id="login_mobile">
				<div id="m_btn">
					<div style="float: left; width: 40%; height:100%;">
						<form action="./login_check.php" method="post">
							<div style="height:40%;">
								<input type="text" placeholder="아이디" size="11" name="id" style="">
							</div>
							<div style="height:40%;">
								<input type="password" placeholder="비밀번호" size="11" name="pw">
							</div>
					</div>
					<div style="text-align:center; float:left; width: 28%; height: 80%; margin-top:5px; margin-left:5px;">
							<input id="btn_tutor" type="submit" value="로그인" style="width:80%">
						</form>	
					</div>
					<div style="float: left; width: 35%; height: 30%; text-align:center; margin-left:-8%;">
						<button onClick="location.href='./joinpage.php';" style="width:80%">
						회원가입</button>
					</div>							
				</div>
			</div>
		</div>
		<hr style="border: solid 1px black;">	
	<?
		}
	?>				
	<!--
		<img src="../img/x-tree.png" width="10%" align="left" style="margin-top:1%;">
		<img src="../img/x-tree.png" width="10%" align="right" style="margin-top:1%;">
	-->
			<div id="wrap">
				<div id="container" align="center">
					<div id="board">
						<div id="btn" style="height: 95%;">
							<div style="width: 28%; height: 100%; float:left; position: relative; ">
								<br>
								
								<div id="btn" style="float:center; width: 80%; height:35%;">
									<button id='btn' value="tutor" onClick="location.href='./algorithm_mainpage.php'" 
														style="float:center; width:100%; height:18%; overflow:hidden;">
										알고리즘 스터디
									</button>
									<br><br>
									<button id='btn' value="tutor" onClick="location.href='./poll/poll_mainpage.php'" 
														style="float:center; width:100%; height:18%; overflow:hidden;">
										설문 조사
									</button>
								</div>					
								
							</div>
							<div style="width: 70%; height: 100%; float:right; position: relative;">
								<br>
								<div class="verticalLine">		
									<div id="solve_mobile">
										<p style="font-size:30px;font-weight:bolder;">
											<a href="http://506lab.iptime.org:8080" style="text-decoration:none;color:black;">
												SOLVE
											</a>
											<a style="font-size:23px;font-weight:bold;
											float:right;margin-right:10px;text-decoration:none;color:black;" 
											href="http://506lab.iptime.org:8080">
												+
											</a>
										</p>
										<hr style="border: solid 1px #aaa;">	
										
											<div style="width:100%; float:left; padding:10px;">
												<div style="width:45%; float:left;text-align:left;overflow: auto;">
													<a href="http://506lab.iptime.org:8080/study/solve/001-prog.php" style="text-decoration:none;color:black;">												
														<hr style="border: solid 1px #aaa;">
															001-prog-종이접기
														<hr style="border: solid thin #ddd;">	
													</a>											
													<table cellpadding="5" cellspacing="0" width="0%"
													style="margin-left:10%;border: solid thin #bbb;">
														<tr>
															<td>
																<p style = "font-size:7px;font-weight:bold;"?>조회<br></p>
																<?php echo $open ?></p>
															</td>
															<td>
																<p style = "font-size:7px;font-weight:bold;"?>완료<br></p>
																<?php echo $solved ?></p>
															</td>
															<td>
																<p style = "font-size:7px;font-weight:bold;"?>추천<br></p>
																<?php echo $recom ?></p>
															</td>
														</tr>
													</table>
													<hr style="border: solid 1px #aaa;">
												</div>												
												<!--
												<div style="width:45%;border: solid 1px blue;float:right;">
													hello
												</div>
												-->
											</div>
										
										<hr style="border: solid 1px #aaa;">
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div align="left" style="">
					<div style="height:15%; width:28%; position:absolute; top:80%;">
						<table cellpadding="5" cellspacing="0" border="1" width="0%"
						style="class=info_table_mobile; float:left;">
								<tr>
								   <td width="110px">오늘 방문자 수</td>
								   <td width="10px"><?php include('./todaycount.php'); ?></td>
								</tr>
								<tr>
								   <td width="110px">총 방문자 수</td>
								   <td width="10px"><?php include('./totcount.php'); ?></td>
								</tr>
								<tr>
								   <td width="110px">현재 회원 수</td>
								   <td width="10px"><?php include('./memcount.php'); ?></td>
								</tr>
							</table>
						</div>
					</div>		
				</div>				
			</div>
</div>
</body>
</html>