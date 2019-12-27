<?
	if( $_GET["page"] == "phpinfo" )
	{
		phpinfo();
		exit;
	}
	session_start(); 
	$res = session_destroy();
	if($res){
		header('Location:../index.php');
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

</body>
</html>
