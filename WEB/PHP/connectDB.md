$conn = mysqli_connect($host, $user, $pw, $dbName);
	
if($conn){
	echo "MySQL success";
}else{
	echo "MySQL fail";
}