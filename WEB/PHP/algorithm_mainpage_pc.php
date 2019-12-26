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
		height:10%;
		
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
		width:75%;
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
		
		font-size:1.8vmin;
		
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
		margin-right:15%;
		text-align: center;
	}
	#solve
	{
	  height:100%;
	  width:50%;
	  float:left;
	  margin-left:10px;
	  margin-right:10px;
	}
	#solve_mobile
	{
	  height:50%;
	  width:50%;
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
		.panel
		{
			text-align:center;
			padding-top:5px;
			
			margin: 0% auto;
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
	$select_query1 = "select * from solve where number = '001';";
	$select_query2 = "select * from solve where number = '002';";
	$select_query3 = "select * from solve where number = '003';";
	$select_query4 = "select * from solve where number = '004';";
	$select_query5 = "select * from solve where number = '005';";
	
	$result1 = mysqli_query($conn, $select_query1);
	$result2 = mysqli_query($conn, $select_query2);
	$result3 = mysqli_query($conn, $select_query3);
	$result4 = mysqli_query($conn, $select_query4);
	$result5 = mysqli_query($conn, $select_query5);
	
	$open1 = $open2 = $open3 = 0;
	$solved1 = $solved2 = $solved3 = 0;
	$recom1 = $recom2 = $recom3 = 0;	
	$open4 = $open5 = $open6 = 0;
	$solved4 = $solved5 = $solved6 = 0;
	$recom4 = $recom5 = $recom6 = 0;
	
	while($row = mysqli_fetch_array($result1)){
		$open1 = $row[open];
		$solved1 = $row[solved];
		$recom1 = $row[recommend];
	}
	while($row = mysqli_fetch_array($result2)){
		$open2 = $row[open];
		$solved2 = $row[solved];
		$recom2 = $row[recommend];
	}	
	while($row = mysqli_fetch_array($result3)){
		$open3 = $row[open];
		$solved3 = $row[solved];
		$recom3 = $row[recommend];
	}	
	while($row = mysqli_fetch_array($result4)){
		$open4 = $row[open];
		$solved4 = $row[solved];
		$recom4 = $row[recommend];
	}	
	while($row = mysqli_fetch_array($result5)){
		$open5 = $row[open];
		$solved5 = $row[solved];
		$recom5 = $row[recommend];
	}
?>
<div id="tophead">			
			<?php		
			if(isset($_SESSION['userid'])){						
			?>					
				<div id = "banner">
					<div class="logo" style="float:left; width:30%; height:100%;">
						<a href="http://506lab.iptime.org:8080">
							<img src="../img/506logo3.png" width="90%" height="80%" align="left" style="position:relative; top:50%; transform:translateY(-50%); margin-left:4%;;">
						</a>
					</div>
					<div class="panel" style="float:left; width:30%; height:20%; position:relative; top:50%; transform:translateY(-50%);">
						<div id="btn" style="float:left; width: 100%; height:100%;">
							<button id='btn' value="tutor" onClick="location.href='./algorithm_mainpage.php'" 
												style="float:left; width:30%; height:100%; overflow:hidden;">
								알고리즘 스터디
							</button>
							<button id='btn' value="tutor" onClick="location.href='./poll/poll_mainpage.php'" 
												style="float:left; width:30%; height:100%; overflow:hidden; margin-left:7%;">
								설문 조사
							</button>
						</div>					
					</div>
					<div id="login" style="float:left; width:40%; height:100%; ">
						<div style="float:right; width: 80%; height: 100%; font-size:210%;">
							<table cellpadding="10" cellspacing="0" border="0" width="0%"
								style="float:right;text-align:center;margin-top:5%;font-size:1.5vmin;" class="info_table">
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
							
							<div id="btn" style="width: 30%; height: 100%; float:right; font-size:50%;">
								<button onClick="location.href='./logout.php';" style="margin-top:30%;width: 80%; height: 20%;overflow:hidden;">로그아웃</button>
							</div>									
							</table>
						</div>	
					</div>
				</div>		
				<br>				
				<hr style="border: solid 1px black;">					
			<?php
				}
				else{
			?>				
				<div id = "banner">
					<div class="logo" style="float:left; width:30%; height:100%;">
						<a href="http://506lab.iptime.org:8080">
							<img src="../img/506logo3.png" width="90%" height="80%" align="left" style="position:relative; top:50%; transform:translateY(-50%); margin-left:4%;">
						</a>
					</div>
					<div class="panel" style="float:left; width:40%; height:20%; position:relative; top:50%; transform:translateY(-50%);">
						<div id="btn" style="float:left; width: 40%; height:100%;">
							<button id='btn' value="tutor" onClick="location.href='./algorithm_mainpage.php'" 
												style="float:left; width:45%; height:100%; overflow:hidden;">
								알고리즘 스터디
							</button>
							<button id='btn' value="tutor" onClick="location.href='./poll/poll_mainpage.php'" 
												style="float:left; width:45%; height:100%; overflow:hidden; margin-left:7%;">
								설문 조사
							</button>
						</div>					
					</div>
					<div style="float:right; width:7%; height:100%;">
							<div id="btn" style="float: left; width: 100%; height: 100%; text-align:center;">
								<button onClick="location.href='./joinpage.php';" style="width:80%; height:23%; overflow:hidden; position:relative; top:40%; transform:translateY(-50%);">
								회원가입</button>
							</div>
					</div>
					<div id="login" style="float:right; width:20%; height:100%;">
						<form action="./login_check.php" method="post">
							<div id="btn" style="float: right; text-align:center; width: 25%; height: 100%;">
									<input id="btn" type="submit" value="로그인" 
										style="float:left; width:80%; text-align:center; overflow:hidden; position:relative; top:40%; transform:translateY(-50%);">
							</div>
							<div id="btn" style="float: right; width: 55%; height: 100%;">
									<input type="text" placeholder="아이디" size="20" name="id" 
										style="overflow:hidden; position:relative; top:40%; transform:translateY(-50%); margin-right:3%;">
									<input type="password" placeholder="비밀번호" size="20" name="pw" 
										style="overflow:hidden; position:relative; top:40%; transform:translateY(-50%); margin-right:3%;">
							</div>
						</form>
					</div>
				</div>
				<br>
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
							<br>
							<div style="width: 100%; height: 100%; position: relative;">
								<div class="verticalLine">	
									<div id="solve" style="float:left; width: 47%; height: 100%; position: relative;">
										<p style="font-size:50px;font-weight:bolder;">
											<a href="./algorithm_mainpage.php" style="text-decoration:none;color:black;">
												SOLVE
											</a>
										</p>
										<p style="font-size:23px;font-weight:bold;float:right;margin-right:10px;">										
											<a href="./algorithm_mainpage.php" style="text-decoration:none;color:black;">
												+
											</a>
										</p><br><br>
										<hr style="border: solid 1px #aaa;">											
											<div style="width:100%; float:left; padding:10px;">
												<div style="width:45%; float:left;text-align:left;overflow: auto;">
													<a href="http://506lab.iptime.org:8080/study/solve/001-prog.php" style="text-decoration:none;color:black;">												
														<hr style="border: solid 1px #aaa;">
															001-prog-종이접기
														<hr style="border: solid thin #ddd;">	
													</a>											
													<table cellpadding="10" cellspacing="0" width="0%"
													style="margin-left:25%;border: solid thin #bbb;">
														<tr>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>조회<br></p>
																<p style="text-align:center;">
																<?php echo $open1 ?></p>
															</td>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>완료<br></p>
																<p style="text-align:center;">
																<?php echo $solved1 ?></p>
															</td>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>추천<br></p>
																<p style="text-align:center;">
																<?php echo $recom1 ?></p>
															</td>
														</tr>
													</table>
													<hr style="border: solid 1px #aaa;">
												</div>
												
											</div>
											<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
											<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
										
										<hr style="border: solid 1px #aaa;">
									</div>
									<div id="solve" style="float:right; width: 47%; height: 100%; position: relative;">
										<p style="font-size:50px;font-weight:bolder;">
											<a href="./algorithm_mainpage.php" style="text-decoration:none;color:black;">
												TEST
											</a>
										</p>
										<p style="font-size:23px;font-weight:bold;float:right;margin-right:10px;">										
											<a href="./algorithm_mainpage.php" style="text-decoration:none;color:black;">
												+
											</a>
										</p><br><br>
										<hr style="border: solid 1px #aaa;">											
											<div style="width:100%; float:left; padding:10px;">
												<div style="width:45%; float:left;text-align:left;overflow: auto; margin-right:3%;">
													<a href="http://506lab.iptime.org:8080/study/solve/002-prog.php" style="text-decoration:none;color:black;">												
														<hr style="border: solid 1px #aaa;">
															002-prog-예산
														<hr style="border: solid thin #ddd;">	
													</a>
													<table cellpadding="10" cellspacing="0" width="0%"
													style="margin-left:25%;border: solid thin #bbb;">
														<tr>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>조회<br></p>
																<p style="text-align:center;">
																<?php echo $open2 ?></p>
															</td>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>완료<br></p>
																<p style="text-align:center;">
																<?php echo $solved2 ?></p>
															</td>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>추천<br></p>
																<p style="text-align:center;">
																<?php echo $recom2 ?></p>
															</td>
														</tr>
													</table>
													<hr style="border: solid 1px #aaa;">
												</div>
												<div style="width:45%; float:left;text-align:left;overflow: auto;">
													<a href="http://506lab.iptime.org:8080/study/solve/003-prog.php" style="text-decoration:none;color:black;">												
														<hr style="border: solid 1px #aaa;">
															003-baek-숫자의 개수
														<hr style="border: solid thin #ddd;">	
													</a>
													<table cellpadding="10" cellspacing="0" width="0%"
													style="margin-left:25%;border: solid thin #bbb;">
														<tr>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>조회<br></p>
																<p style="text-align:center;">
																<?php echo $open3 ?></p>
															</td>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>완료<br></p>
																<p style="text-align:center;">
																<?php echo $solved3 ?></p>
															</td>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>추천<br></p>
																<p style="text-align:center;">
																<?php echo $recom3 ?></p>
															</td>
														</tr>
													</table>
													<hr style="border: solid 1px #aaa;">
												</div>
												<div style="width:45%; float:left;text-align:left;overflow: auto; margin-right:3%;">
													<a href="http://506lab.iptime.org:8080/study/solve/004-prog.php" style="text-decoration:none;color:black;">												
														<hr style="border: solid 1px #aaa;">
															004-baek-체스판 다시 칠하기
														<hr style="border: solid thin #ddd;">	
													</a>
													<table cellpadding="10" cellspacing="0" width="0%"
													style="margin-left:25%;border: solid thin #bbb;">
														<tr>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>조회<br></p>
																<p style="text-align:center;">
																<?php echo $open4 ?></p>
															</td>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>완료<br></p>
																<p style="text-align:center;">
																<?php echo $solved4 ?></p>
															</td>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>추천<br></p>
																<p style="text-align:center;">
																<?php echo $recom4 ?></p>
															</td>
														</tr>
													</table>
													<hr style="border: solid 1px #aaa;">
												</div>
												<div style="width:45%; float:left;text-align:left;overflow: auto;">
													<a href="http://506lab.iptime.org:8080/study/solve/005-prog.php" style="text-decoration:none;color:black;">												
														<hr style="border: solid 1px #aaa;">
															005-baek-영역 구하기
														<hr style="border: solid thin #ddd;">	
													</a>
													<table cellpadding="10" cellspacing="0" width="0%"
													style="margin-left:25%;border: solid thin #bbb;">
														<tr>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>조회<br></p>
																<p style="text-align:center;">
																<?php echo $open5 ?></p>
															</td>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>완료<br></p>
																<p style="text-align:center;">
																<?php echo $solved5 ?></p>
															</td>
															<td>
																<p style = "font-size:15px;font-weight:bold;"?>추천<br></p>
																<p style="text-align:center;">
																<?php echo $recom5 ?></p>
															</td>
														</tr>
													</table>
													<hr style="border: solid 1px #aaa;">
												</div>
												
											</div>
											<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
											<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
										
										<hr style="border: solid 1px #aaa;">
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div align="left" style="">
						<div style="height:15%; width:15%; position:absolute; top:80%;">
							<table cellpadding="5" cellspacing="0" border="1" width="0%"
							class="info_table" style="float:left; margin-left:3%;font-size:1.5vmin">
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