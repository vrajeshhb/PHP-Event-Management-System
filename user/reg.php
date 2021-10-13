<?php 
include("connect.php");
session_start();

if(isset($_POST['reg']))
{
	$q = "select * from user where email = '".$_SESSION["user"]."' ";
	$result = mysql_query($q);
	if (!$result)
	{
	   	echo 'Could not run query: ' . mysql_error();
	   	exit;
	}
	$row = mysql_fetch_row($result);
	$name = $row[2];
	$contact = $row[4];
	$ins = $row[5];
	

	echo $_POST['sub_id'];
	echo $_POST['main_id'];
	
	$sql = "INSERT INTO `event`.`reg_event` (`id`, `main_id`, `sub_id`, `u_name`, `u_email`, `u_contact`, `u_institute`) VALUES (NULL, '".$_POST['main_id']."', '".$_POST['sub_id']."', '$name', '".$_SESSION["user"]."', '$contact', '$ins');";
	
	echo $sql;
	
	//$r = mysql_query($sql);
	mysql_query($sql);
	if(!$r)
	{
		echo "done";
		
	}
	else
	{
		echo "not";
	}
header("location:index.php");
}

?>