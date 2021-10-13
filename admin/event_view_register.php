<?php
include("connect.php");
session_start();
if(isset($_SESSION["admin"]))
{

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home | Event Registration</title>
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
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>

<style type="text/css">	
	td {
				    height: 30px;
				    
				    vertical-align: bottom;	
				    
			    }


table.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
}

table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
.oddrowcolor{
	background-color:#FDEDFE;
}
.evenrowcolor{
	background-color:#FFC4FF;
}
.style1 {font-family: "Times New Roman", Times, serif}


.in{
height:35px;
width:200px
}

.bu{
height:35px;
width:45px
background-color:#FF99FF;
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
             <li><a href="sub_event.php">Add Sub Event</a></li>
			 <li><a href="edit.php">Edit Event</a></li>
			 <li><a href="fed.php">Feeds</a></li>
             <li class="current"><a href="event_view_register.php">View Registration</a></li>
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
	
		
	}
?>


<section id="content">
  <div class="container">
    	<br>
    	<form action="event_view_register.php" method="post">
	<h4 align="center">Select Event  :
<select align="center" name="select">
<?php
	$s = "SELECT * FROM sub  " ;			
	$q=mysql_query($s);
	$no=0;
	while($res=mysql_fetch_array($q))
	{
	?>
	
	<option value="<?php echo $res[0]; ?>">  <?php echo $res[2]; ?> </option>
	
	<?php
	}
?>
</select>

<input type="submit" name="view" value="Edit"/>
</form>


<?php if(isset($_POST['view'])){ ?>
<table width="950" style="margin-top:40px; margin-left:100px;" class="altrowstable" id="alternatecolor">
			<tr style="background-image:url(../images/work_6.jpg)">
					<td colspan="6"></td>
					
			</tr>
			<tr style="background-image:url(../images/work_7.jpg); font-size:20px;"> 
					<td width="60" >Sr No.</td>
					
					<td width="95">User Name  </td>
					<td width="100">E-Mail </td>
					<td width="100">Contact</td>
					<td width="175">Institute </td>
						
			</tr>
			<?php 
$sql = "SELECT * FROM  reg_event where sub_id = '".$_POST['select']."' ORDER BY  `reg_event`.`id` DESC ";
//echo $sql;
$q=mysql_query($sql);
$no=0;
while($res=mysql_fetch_array($q))
{
$no=$no+1;
?>

			<tr style="font-size:14px">
					<td><?php echo "$no"; ?></td>		
					
					<td><?php echo $res[3]; ?></td>
					<td><?php echo $res[4]; ?> </td>
					<td><?php echo $res[5]; ?> </td>
					<td><?php echo $res[6]; ?> </td>
					
			</tr>
				
			
<?php 
}
?>	
<tr style="background-image:url(../images/work_6.jpg)">
					<td colspan="6" style="font-size:14px; color:#FF0000;" align="center"> </td>
					
			</tr>		
	</table>
	<?php } ?>
	</div>
</h4>

	
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