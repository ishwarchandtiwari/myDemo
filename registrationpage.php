<html>
<head>
<!-- *** Adding file for callender *** -->

<link type="text/css" href="Calender/jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="Calender/jquery.min.js"></script>
<script type="text/javascript" src="Calender/jquery.datepick.js"></script>

<!-- *** Adding file for Capcha *** -->
<html>
</head>
<!-- *** Adding .js file for validation *** -->
<script src="validateregistration.js"></script>
	
<script>
$(function() {
	$('#dob').datepick();
});
</script>


</head>


<body>
<form name="registration">
<table  border="0" align="center" style="font-size:16px" bgcolor="#99CCCC">
      <tr>
        <td >Name:</td>
        <td><input type="text" name="name" id="name" placeholder ="Enter your Name" onFocus="validateFormOnFocus(this.id,'bnameerror');">
		<span id="nameerror" style="color:#993300;"> </span>
		</br><span id="bnameerror" style="color:#993300; display:none; ">Please Enter Name</span></td>
      </tr>
      <tr>
        <td >User Name:</td>
        <td><input type="text" name="uname" id="uname" placeholder ="Enter your User Name" onFocus="validateFormOnFocus(this.id,'bunameerror');" >
		<span id="unameerror" style="color:#993300;"></span>
		</br><span id="bunameerror" style="color:#993300; display:none; ">Please Enter User Name</span></td>
      </tr>
      <tr>
        <td>E-mail:</td>
        <td><input type="text" name="email" id="email" placeholder ="Enter your Email" onFocus="validateFormOnFocus(this.id,'bemailerror');">
		<span id="emailerror" style="color:#993300;"></span>
		</br><span id="bemailerror" style="color:#993300; display:none; ">@e.g: vishal@gmail.com</span></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="pwd" id="pwd" placeholder ="Enter a password" onFocus="validateFormOnFocus(this.id,'bpasserror');">
		<span id="passerror" style="color:#993300; "> </span>
		</br><span id="bpasserror" style="color:#993300; display:none; ">Please Enter Password</span></td>
      </tr>
      <tr>
        <td>Confirm Password:</td>
        <td><input type="password" name="cpwd" id="cpwd" placeholder ="Enter password as above" onFocus="validateFormOnFocus(this.id,'bcnfpasserror');">
		<span id="cnfpasserror" style="color:#993300;"> </span>
		</br><span id="bcnfpasserror" style="color:#993300; display:none; ">Please Enter same Password</span></td>
      </tr>
	  <tr>
        <td>Date of Birth:</td>
        <td><input type="text" name="dob" class="date" id= "dob" placeholder="click here" style="background-image:url(images.jpg);background-repeat:no-repeat; background-position:right;">
		<span id="doberror" style="color:#993300;"></span>
		<span id="bdoberror" style="color:#993300; display:none; ">Please Enter Date of Birth</span></td>
      </tr>
      
      <tr>
        <td>Gender:</td>
        <td><input type="radio" name="gender" id="genderm" value="Male" checked>Male
          <input type="radio" name="gender" id="genderf" value="Female">Female
		  <span id="gendererror" style="color:#993300;"></span></td>
      </tr>
      <tr>
        <td>Nearest Metro City:</td>
        <td><select name="city">
		<option value="">Select</option>
		<option value="Delhi">Delhi</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Chennai">Chennai</option>
		<option value="Kolkatta">Kolkatta</option></select>
		<span id="cityerror" style="color:#993300;"></span>
	  </tr>
      <tr><div id="myDiv" style="color:#993300;">
      	<td><input type="text" name="captcha_code" id="captcha_code" size="10" maxlength="6" placeholder="validation code"></br>
<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a></td>
      	<td><img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
        <span id="captchaerror" style="color:#993300;"></span></td>
      </div></tr>
      <tr>
        <td><input type="button"  name ="b1" onClick="validateFormOnSubmit()" value="Submit"></td>
        <td><input name="reset" type="reset" value="reset"></td>
      </tr>
    </table>
	
</form>
</body>
</html>
