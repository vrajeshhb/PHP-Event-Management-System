<!DOCTYPE html>
<html lang="en">
<head>
<title>Home | Register</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/touchTouch.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script src="js/jquery.shuffle-images.js"></script>
<script>
function validateForm() {
	
	
	
	var x = document.forms["frm"]["mail"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
        alert("Not a valid e-mail address");
        return false;
    }
	
	
	if(document.frm.pass.value == document.frm.pass1.value)
	{
		//alert("Password Does  match...");
		return true;
	}
	else
	{
		alert("Password Does not match...");
		return false;
	}
	
}

</script>

<style>

table{
font-size:25px;
border:#000000;

width:650px;


}
.in{
height:35px;
width:300px
}

.bu{
height:35px;
width:45px
background-color:#FF99FF;
}

td{
padding: 15px 15px 15px 15px;;
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
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
       
        <div class="navigation ">
          <nav>
            <ul class="sf-menu">
             <li><a href="index.php">Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="gallery.php">Gallery</a></li>
             <li class="current"><a href="register.php">Register</a></li>
             <li><a href="Login.php">Login</a></li>
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
<section id="content">
  <div class="container">
   	<form action="register.php" method="post" name="frm" onSubmit="return validateForm();">
	<h4><b>Fill Up The Following Details :</b></h4>
	
	<?php
include("connect.php");
if(isset($_POST['submit']))
{
	$se = "select email from user";
	$q=mysql_query($se);
	$no_mail=0;
	while($res=mysql_fetch_array($q))
	{
		if($res[0] == $_POST['mail'])
		{
			$no_mail++;
		}
	}
	
	
	
	if($no_mail>0)
	{
		echo '<h4 style="color:red"> EMAIL ADDRESS ALREADY REGISTERED ....... Try Again</h4>';
	}
	else
	{
		//fname lname mail pass pass1 tel add
		$mail =$_POST['mail'];
		$name=$_POST['name'];
		$pass = $_POST['pass'];		
		$tel =$_POST['tel'];
		$ins =$_POST['ins'];
		$da = $_POST['da'];
		
		//echo $name."    ".$mail."  ".$name."  ".$pass."  ".$tel."  ".$ins."  ".$da."  ";
		
		$sql = "INSERT INTO `event`.`user` (`id`, `email`, `name`, `pass`, `contact`, `institute`, `dob`) VALUES (NULL, '".$mail."', '".$name."', '".$pass."', '".$tel."', '".$ins."', '".$da."');";
		$check = mysql_query($sql);
	
		echo '<h5 style="color:red"> RECORD INSERTED ......... </h5>'; 

	}
}
?>
	<br>
	<table>
		<tr>
			<td>Enter Email Address <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input class="in" type="text" id="3" name="mail" placeholder="abc@mail.com" required /></td>
		</tr>
		
		<tr>
			<td>Enter Name <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input type="text" class="in" name="name" placeholder="Name Surname" required/></td>
		</tr>
		
		<tr>
			<td>Enter Password <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input type="password" class="in" name="pass" placeholder="*********" required/></td>
		</tr>
		
		<tr>
			<td>Enter Contact <label style="font-size:15px; color:#FF0000;">(*)</label><br><label style="font-size:15px; color:#FF0000;"> <sub> <pre>     (10 Digits Required.)</pre></sub> </label></td>
			<td> <input  type="tel" name="tel" class="in" pattern="^\d{10}$" required /></td>
		</tr>
		
		<tr>
			<td>Enter Institute <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td> <input  type="text" name="ins" placeholder="Institute Name" class="in" required /></td>
		</tr>
		
		<tr>
			<td>Date Of Birth <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td> <input  type="date" name="da" class="in"  required /> </td>
		</tr>
		
		<tr>
			<td><input class="bu" type="submit" name="submit" value="Register"/></td>
			<td> <input class="bu"  type="reset" name="reset" value="Reset"/></td>
		</tr>
	</table>
	</form>
  </div>
</section>

<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12" align="center"> 
        <div class="copyright"><a href="#" class="f_logo"><img src="images/f_logo.png" alt=""></a> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
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

