<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmation page</title>
</head>
<body>
<?php
	$details= array();
	$details[0]=$_POST["id"];
	$details[1]=$_POST["password"];
	print_r($details);
	$file=fopen("file.txt", "r");
	$str=fgets($file,13);
	$cmp=implode(" ",$details);
	echo "<br>".$cmp."<br>";
	if(!strcmp($cmp,$str)){
		$_SESSION["status"]=1;
		$_SESSION["usr"]=$_POST["id"];
		header("location:login.php");
	}
		
	else{
		$_SESSION["status"]=0;
		header("location:login.php");
	}
?>

</body>
</html>