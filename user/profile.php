<?php
include("connect.php");
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HOME | <?php echo $_SESSION["user"]; echo " Profile"; ?></title>
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

<script>
  $(window).load(function(){
    $().UItoTop({ easingType: 'easeOutQuart' });
    $('.gallery .info').touchTouch();
  }); 

   $(document).ready(function(){
       $(".shuffle-me").shuffleImages({
         target: ".images > img"
       });
    });
</script>
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
            <ul class="sf-menu">
             <li ><a href="index.php">Home</a></li>
             <li ><a href="exp.php">Eplore</a></li>
             <li><a href="exp2.php">Latest Uploads</a></li>
             <li class="current"><a href="profile.php">View Profile</a></li>
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
 
  <div class="container gallery">
    <div class="row">
	<br>
     <h1 style="font-size:28px; margin-left:190px;">YOUR REGISTERD IN :</h1>
<form action="index.php" method="post">
					<table width="850" style="margin-top:40px; margin-left:200px;" class="altrowstable" id="alternatecolor">
			<tr style="background-image:url(../images/work_6.jpg)">
					<td colspan="6"></td>
					
			</tr>
			<tr style="background-image:url(../images/work_7.jpg); font-size:20px;"> 
					<td width="60" >Sr No.</td>
					
					<td width="95">Main Event </td>
					<td width="100">Event </td>
					<td width="77">Date  </td>
					<td width="49">organizer</td> 
					<td width="150">Location</td> 
						
			</tr>
			<?php 
$sql = "SELECT * FROM  `reg_event` where u_email = '".$_SESSION["user"]."' ORDER BY  `reg_event`.`id` DESC  ";
//echo $sql;
$q=mysql_query($sql);
$no=0;
while($res=mysql_fetch_array($q))
{
$no=$no+1;

$result = mysql_query("SELECT * FROM main WHERE id = '".$res[1]."' ");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);	
$mname = $row[1]; 
$date = $row[2]; 
$loc = $row[3];



$result1 = mysql_query("SELECT * FROM sub WHERE id = '".$res[2]."' ");
if (!$result1) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$r = mysql_fetch_row($result1);	
$event = $r[2]; 
$o = $r[6]; 

?>

			<tr style="font-size:14px">
					<td><?php echo "$no"; ?></td>		
					
					<td><?php echo $mname; ?></td>
					<td><?php echo $event; ?> </td>
					<td><?php echo $date; ?> </td>
					<td><?php echo $o;?></td>
					<td><?php echo $loc;?></td>
			</tr>
				
			
<?php 
}
?>	
<tr style="background-image:url(../images/work_6.jpg)">
					<td colspan="6" style="font-size:14px; color:#FF0000;" align="center"> <a href="fed.php">Send Feedback.</a></td>
					
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
}
else
{header("location:../index.php");}
?>
