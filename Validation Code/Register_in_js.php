
<!DOCTYPE html>
<html lang="en">
  <head>
	<script>
	function abc()
	{
	if(document.frm.fname.value=="" && document.frm.lname.value=="" && document.frm.mail.value=="" && document.frm.pass.value=="" && document.frm.pass1.value=="" && document.frm.con.value=="" && document.frm.add.value=="" )
	{
		alert("Plz fill-up  form");
		return false;
	}
	else if(document.frm.fname.value=="")
	{
		alert("Plz fill-up First name");
		return false;
	}
	else if(document.frm.lname.value=="")
	{
		alert("Plz fill-up Last name");
		return false;
	}
	else if(document.frm.mail.value=="" )
	{
		alert("Plz fill-up Mail Address");
		return false;
	}
	
	else if(document.frm.pass.value=="")
	{
		alert("Plz fill-up Password");
		return false;
	}
	else if(document.frm.pass1.value=="")
	{
		alert("Plz fill-up confirm password");
		return false;
	
	}
	else if(document.frm.con.value=="")
	{
		alert("Plz fill-up Contact Details..");
		cv();
		return false;
	}
	else if(document.frm.add.value=="")
	{
		alert("Plz fill-up Address");
		return false;
	}
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
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
	
	
	<style>
textarea{
	resize:none;
}
	</style>
  </head>
<body>
	<form class="form-horizontal" method="post" name="frm" onSubmit="return validateForm();">
		<h3>Your Personal Details</h3>
		
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="fname" id="1" placeholder="First Name" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="lname" id="2"  placeholder="Last Name" required>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="mail" id="3"   placeholder="Email" required>
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="pass" id="4"     placeholder="Password" required>
		</div>
	  </div>
	  	<div class="control-group">
		<label class="control-label">Confirm Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="pass1" id="5"    placeholder="Password" required>
		</div>
	  </div>

	<div class="control-group">
		<label class="control-label">Contact  <sup>*</sup></label>
		<div class="controls">
		  <input id="6" type="tel" name="tel" pattern="^\d{10}$" required >
		  <label> <sub>( 10 Digits Required.)</sub> </label>
		</div>
	  </div>

<div class="control-group">
		<label class="control-label">Address <sup>*</sup></label>
		<div class="controls">
		<input type="text" style="width:207px; height:100px;" name="add" id="7" required  />
		</div>
	  </div>


	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submit"  value="Submit"   placeholder="Register" class="exclusive shopBtn" >
		</div>
	</div>
	</form>
  </body>
</html>
