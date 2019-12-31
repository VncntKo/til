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
	
</style>
</head>
<body>
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
		
		
		$bring_query = "select * from member";
		$result = mysqli_query($conn, $bring_query);
		
		$login = false;
		echo "<br>";
		$cnt = 0;
		while($row = mysqli_fetch_array($result)){	
			// echo $row[id], ' ', $row[pw], ' ', $row[name], "<br>";
			$hashed = base64_encode(hash('sha256', 'dkdldb152*', true));
			$pwd = $hashed;
			
			echo $row[name], ' ', $row[pw], ' ', $pwd, '<br>';
			
			// $bring_query = "update member set pw ='".$pwd."' where student_id = '".row[student_id]."';";
			// mysqli_query($conn, $bring_query);
			
			$cnt++;
			if ($cnt >= 4){
				break;
			}
		}
				
		
	?>
	

</body>
</html>
