<?php
include("connect.php");
session_start();
if(isset($_SESSION["admin"]))
{

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="../images/favicon.ico">
<link rel="shortcut icon" href="../images/favicon.ico" />
<link rel="stylesheet" href="../css/touchTouch.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../js/jquery.js"></script>
<script src="../js/jquery-migrate-1.1.1.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/script.js"></script> 
<script src="../js/superfish.js"></script>
<script src="../js/jquery.equalheights.js"></script>
<script src="../js/jquery.mobilemenu.js"></script>
<script src="../js/tmStickUp.js"></script>
<script src="../js/jquery.ui.totop.js"></script>
<script src="../js/touchTouch.jquery.js"></script>
<script src="../js/jquery.shuffle-images.js"></script>


<style>

table{
font-size:25px;
border:#000000;

width:650px;


}
.in{
height:35px;
width:200px
}

.bu{
height:35px;
width:45px
background-color:#FF99FF;
}

td{
padding: 15px 15px 15px 15px;;
}
li
{
	
}
</style>

</head>

<body class="page1" id="top">
  <div class="main">
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h1>
          <a href="index.php">
            <img src="../images/logo.png" alt="Logo alt">
          </a>
        </h1>
       
        <div class="navigation">
          <nav>
            <ul class="sf-menu" >
             <li class="current"><a href="index.php">Home</a></li>
             <li><a href="main_event.php">Add Main Event</a></li>
             <li><a href="sub_event.php">Add Sub Event</a></li>
			 <li><a href="edit.php">Edit Event</a></li>
			 <li><a href="fed.php">Feeds</a></li>
             <li><a href="event_view_register.php">View Registration</a></li>
			 <li><a href="stop_register.php">Stop event</a></li>
             <li><a href="logout.php">Logout</a></li>
           </ul>
          </nav>
          <div class="clear"></div>
        </div>       
      </div>
    </div>
  </div>
</header>
<!--=====================
          Content
======================-->
<?php
	if(isset($_POST['submit']))
	{
		if(isset($_POST['rpass']))
		{
		$pass = $_POST['rpass'];
		$sql = "update `event`.`admin`  set password = '".$pass."' where username= '".$_SESSION["admin"]."'";
		$res=mysql_query($sql);
		echo '<script> alert("Password Updated..."); </script>';

		}
		if(isset($_POST['mail']))
		{
		$uname = $_POST['mail'];
		$pass = $_POST['pass'];
		$sql = "INSERT INTO `event`.`admin` (`id`, `username`, `password`) VALUES (NULL, '".$uname."','".$pass."');";
		$res=mysql_query($sql);
		echo '<script> alert("Admin Added..."); </script>';
		}
	}
?>


<section id="content">
  <div class="container">
    <div style="margin-left:270px; border-style:outset; border-width:thin; border-bottom-width:thick; width:650px; margin-top:40px">
   	<form action="index.php" method="post" name="frm" >
	<h4 style="color:#FF0000"><b> Admin New Login :</b></h4>
	
	<br>
	<table>
		<tr>
			<td>Admin User Name <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input class="in" type="text" id="3" name="mail" placeholder="abc123" required /></td>
		</tr>
		
		<tr>
			<td>Admin Password <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input type="password" class="in" name="pass" placeholder="*********" required/></td>
		</tr>
		
		<tr>
			<td><input class="bu" type="submit" name="submit" value="Login"/></td>
			<td> <input class="bu"  type="reset" name="reset" value="Reset"/></td>
		</tr>
	</table>
	</form>
	</div>
	
	
	<div style="margin-left:270px; border-style:outset; border-width:thin; border-bottom-width:thick; width:650px; margin-top:40px">
   	<form action="index.php" method="post"  >
	<h4 style="color:#FF0000"><b> Change Your Password:</b></h4>
	
	<br>
	<table>
		
		<tr>
			<td>Enter New Password <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input type="password" class="in" name="rpass" placeholder="*********" required/></td>
		</tr>
		
		<tr>
			<td><input class="bu" type="submit" name="submit" value="Change"/></td>
			<td> </td>
		</tr>
	</table>
	</form>
	</div>
  </div>
</section>

<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12" align="center"> 
        <div class="copyright"><a href="#" class="f_logo"><img src="../images/f_logo.png" alt=""></a> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
          <div class="sub_copyright">
            Website designed by <a href="" rel="nofollow">Manan Thakrar And Abhay Shah </a>
          </div>
        </div>
      </div>
    </div>

  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</div>
</body>

</html>




<?php
}else
{
header("location:../index.php");
}
?>