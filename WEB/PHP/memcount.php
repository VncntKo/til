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
		//include('./db/connect.php');
		
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
		
		$bring_query = "select * from member";
		$result = mysqli_query($conn, $bring_query);
		
		$memnum = 0;
		while($row = mysqli_fetch_array($result)){	
			$memnum = $memnum + 1;
		}
		
		echo $memnum;
	?>	

</body>
</html>
