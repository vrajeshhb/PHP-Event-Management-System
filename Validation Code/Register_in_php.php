
<?php
/*
if(isset($_POST['sineup']))
{

	if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["fname"]) === 0){
	$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash --fname</p>';
	echo $errName;}

	if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["lname"]) === 0){
	$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash --lname</p>';
	echo $errName;}

	if(preg_match("/[a-zA-Z -]+$/", $_POST["email"]) === 0){
	$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash --email</p>';
	echo $errName;}//"/^[a-zA-Z\_\-\.0-9]+\@[a-zA-Z\_\-\.0-9]+$/"

	if(preg_match("$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$", $_POST["password"]) === 0){
	$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash --password</p>';
	echo $errName;}

	if(preg_match("/^07[0-9]{9}$/", $_POST["number"]) === 0)
	{
		$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash --mo no</p>';
		echo $errName;
	}

	if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["date"]) === 0){
	$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash --date</p>';
	echo $errName;}

	if(preg_match("/^[a-zA-Z -]+$/", $_POST["grp"]) === 0){
	$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash--male-female</p>';
	echo $errName;}

	if(preg_match("/^[a-zA-Z -]+$/", $_POST["city"]) === 0){
	$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash -city</p>';
	echo $errName;}

	if(preg_match("/^[a-zA-Z -]+$/", $_POST["state"]) === 0){
	$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash --state</p>';
	echo $errName;}
}
else
{	*/
//echo "Done";
	$con = mysql_connect("localhost","root","");
	if (!$con)
  {
  		die('Could not connect: ' . mysql_error());
  }
	/*
	
		insert into code over here!!!!
	
	
	*/
	//echo "1 record added";
	echo "<script>alert('sucessful register');window.location.href='login.php';</script>";
	//header("Location:login.php");
	mysql_close($con);

?>