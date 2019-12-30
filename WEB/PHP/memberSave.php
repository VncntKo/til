<?
	if( $_GET["page"] == "phpinfo" )
	{
		phpinfo();
		exit;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title> THIRD-LAB </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<?php
		function get_client_ip() {
			$ipaddress = '';
			if (getenv('HTTP_CLIENT_IP'))
				$ipaddress = getenv('HTTP_CLIENT_IP');
			else if(getenv('HTTP_X_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
			else if(getenv('HTTP_X_FORWARDED'))
				$ipaddress = getenv('HTTP_X_FORWARDED');
			else if(getenv('HTTP_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_FORWARDED_FOR');
			else if(getenv('HTTP_FORWARDED'))
				$ipaddress = getenv('HTTP_FORWARDED');
			else if(getenv('REMOTE_ADDR'))
				$ipaddress = getenv('REMOTE_ADDR');
			else
				$ipaddress = 'UNKNOWN';
			return $ipaddress;
		}

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
		$pwd = $_POST['pwd'];
		$pwd2 = $_POST['pwd2'];
		$name = $_POST['name'];
		$stuid = $_POST['stuid'];
		$ip = $_SERVER['REMOTE_ADDR'];
		
		if ($pwd != $pwd2){
			echo '<script>alert("비밀번호가 다릅니다.");</script>';
	?>
		<script type="text/javascript">
			location.href="http://506lab.iptime.org:8080/study/joinpage.php";
		</script>
	<?php
		}
		else{
			$hashed = base64_encode(hash('sha256', $pwd, true));
			$pwd = $hashed;
			
			$bring_query = "select * from member";
			$result = mysqli_query($conn, $bring_query);
			
			$stuidflag = false;
			$idflag = false;
			$emptyflag = false;
			while($row = mysqli_fetch_array($result)){
				//echo "학번: ".$row[student_id]."/ 이름: ".$row[name]."/ 비밀번호: ".$row[pw]."/ 아이디: ".$row[id]."<br/>";
				if ($row[student_id] == $stuid){
					$stuidflag = true;
				}
				if ($row[id] == $id){
					$idflag = true;
				}
			}
			if ($idflag){
				echo '<script>alert("사용할 수 없는 아이디입니다.");</script>';
			}
			if ($stuidflag){
				echo '<script>alert("이미 존재하는 학번입니다.");</script>';
			}
			if ($id == NULL || $pwd == NULL || $name == NULL || $stuid == NULL){	
				$emptyflag = true;
				echo '<script>alert("빈칸을 모두 채우세요.");</script>';
			}
			
			if (preg_match('/^201\w30\w0/', $stuid, $match_stuid)){	
			}	//학번 폼
			else{
				echo "<script>alert('실제 학번을 입력하세요');</script>";
			}
			if(preg_match("/^[가-힣]*$/", $name, $match_name)){
			}	//한글이름 폼
			else{
				echo '<script>alert("실제 이름을 입력하세요");</script>';
			}
			
			
			if (($idflag) or ($stuidflag) or ($emptyflag) or (!$match_stuid) or (!$match_name)){
		?>
				<script type="text/javascript">
					location.href="./joinpage.php";
				</script>
				
		<?php
			}
			else{				
				$insert_query = "insert into member values('$stuid','$name','$pwd','$id','$ip','','')";
				$mysqli = mysqli_query($conn, $insert_query);
				
				if($mysqli){				
					echo '<script>alert("화이팅!");</script>';
		?>
				<script type="text/javascript">
					location.href="http://506lab.iptime.org:8080/index.php";
				</script>
			
		<?php
				}else{
					echo "가입이 안되네요 톡방에 문의해주세요";
				}
			}
		}
		
		mysqli_close($conn);
	?>


</body>
</html>
