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

	<SCRIPT LANGUAGE="JavaScript">
	// function test() {
		// var year = new Date().toISOString().slice(0, 4);
		// var month = new Date().toISOString().slice(5, 7);
		// var day = new Date().toISOString().slice(8, 10);
		// var date = String(year) + String(month) + String(day);
		// return String(date);
	// }
	</SCRIPT>
	
	<?php
		//include('../db/connect.php');
		
		$host = 'localhost';
		$user = 'root';
		$pw = 'apmsetup';
		$dbName = 'algorithm';
		
		$conn = mysqli_connect($host, $user, $pw, $dbName);
		
		if($conn){
			//echo "MySQL success";
		}else{
			echo "MySQL fail";
		}
		
		mysqli_set_charset($conn, "utf-8");	
		
		// echo "<script>var a = test(); document.write(a);</script>";
		// $todaydate = ob_get_clean();
		
		$todaydate = date("Ymd");
		
		$select_query = "select * from visit;";
		$result = mysqli_query($conn, $select_query);
		
		$existflag = false;
		while($row = mysqli_fetch_array($result)){
			if ($row[dated] == $todaydate){
				$todaycount = $row[count];
				$existflag = true;	
				break;
			}
		}
		$todaydate = (int)$todaydate;
		
		
		if ($existflag){
			if (!$_COOKIE['ip']){
				$todaycount++;
				
				$update_todcnt = "update visit set count=".$todaycount." where dated='".$todaydate."';";
				mysqli_query($conn, $update_todcnt);
				
				SetCookie('ip', $_SERVER["REMOTE_ADDR"], time()+86400);
			}
			
			echo $todaycount;
		
			// $increase_todaycount = "update visit set count = ".$todaycount." where dated = ".$todaydate;			
			// if(mysqli_query($conn, $increase_todaycount)){
				// //echo $todaycount, $todaydate, " update successfully";
			// }
			// else{
				// //echo "Error:".$query."mesage:".mysqli_error($conn);  
			// }
	}		
	else{			
		echo '1';
		$insert_query = "insert into visit values({$todaydate}, 1);";		
		SetCookie('ip', "", time()-3600, '/');
		SetCookie('ip', $_SERVER["REMOTE_ADDR"], time()+86400);
		mysqli_query($conn, $insert_query);
	}
		
		
	?>	

</body>
</html>
