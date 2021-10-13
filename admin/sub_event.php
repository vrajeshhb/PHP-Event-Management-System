<?php
include("connect.php");
session_start();
if(isset($_SESSION["admin"]))
{

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home | Add Sub Event</title>
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
       
        <div class="navigation ">
          <nav>
            <ul class="sf-menu" style="font-size:3px;">
             <li><a href="index.php">Home</a></li>
             <li><a href="main_event.php">Add Main Event</a></li>
             <li class="current"><a href="sub_event.php">Add Sub Event</a></li>
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


<section id="content">
  <div class="container">
    	<br>
    	<form action="sub_event.php" method="post">
	<h4 align="center">View Event Id :
<select align="center" name="select">
<?php
	$s = "SELECT * FROM main" ;			
	$q=mysql_query($s);
	$no=0;
	while($res=mysql_fetch_array($q))
	{
	?>
	
	<option value="<?php echo $res[0]; ?>">  <?php echo $res[1]; ?> </option>
	
	<?php
	}
?>
</select>

<input type="submit" name="view" value="View"/>

</form>

<?php
if(isset($_POST['view']))
{
	if(isset($_POST['select']))
	{
		echo '<br><br>';
		//echo '<h4 style="color:red;" >';
		echo 'ID IS : ';
		echo $_POST['select'];
		//echo '</h4>';
	}
}
?>
</h4>

	<div style="margin-left:270px; border-style:outset; border-width:thin; border-bottom-width:thick; width:650px; margin-top:40px">
   	<form action="sub_event.php" method="post" enctype="multipart/form-data" >
	<h4 style="color:#FF0000"><b> Add New Event:</b></h4>
	
	<br>
	<table>
		
		<tr>
			<td>Enter SUB Event Name : <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input type="text" class="in" name="name"  required/></td>
		</tr>
		
		<tr>
			<td>Enter Event Date : <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input type="date" class="in" name="da"  required/></td>
		</tr>
		
		<tr>
			<td>Enter Event Entry Limit : <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input type="text" class="in" name="l"  required/></td>
		</tr>
		
		<tr>
			<td>Enter Main Event Id : <label style="font-size:15px; color:#FF0000;">(*)<br>(You Can See It From View Main Event)</label></td>
			<td><input type="text" class="in" name="mid"  required/></td>
		</tr>
		
		<tr>
			<td>Choose Image: <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input type="file" class="" name="image"  required/></td>
		</tr>
		
		<tr>
			<td><input class="bu" type="submit" name="submit" value="ADD"/></td>
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
if(isset($_POST['submit'])){
if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
	{
		echo "Please Select an Image.";
	}
	else
	{
	$image = addslashes($_FILES['image']['tmp_name']);
	$name = addslashes($_FILES['image']['name']);
	$image = file_get_contents($image);
	$image = base64_encode($image);
	
	$sname= $_POST['name'];
	$sda = $_POST['da'];
	$li = $_POST['l'];
	$mid = $_POST['mid'];
	$user = $_SESSION['admin'];
	
	$qry = "INSERT INTO `event`.`sub` (`id`, `main_id`, `sub_name`, `date`, `limit`, `enable`, `organizer`, `image`) VALUES (NULL, '".$mid."', '".$sname."', '".$sda."', '".$li."', '1', '".$user."','$image');";

//echo $qry;
	
	$result = mysql_query($qry);
	if($result)
	{
		echo '<script> alert("EVENT UPLOADED...") </script>';
	}	
	else
	{
echo '<script> alert("EVENT UPLOADED...") </script>';
	}
		
	}
}
?>


<?php
}else
{
header("location:../index.php");
}
?>