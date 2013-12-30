<html>
<head>

	<!-- Import file for validation-->
    
	<script src="validatelogin.js"></script>
</head>
<body>
    <form name="login">kkkkkkkkkkfffffff
    <table border="0" align="center" bgcolor="#999900">
      <tr>
        <td ><label for="name">User Name:*</label></td>
        <td ><input type="text"  name="name" id="name" placeholder ="User Name" onFocus="validateLoginonFocusForm(this.id,'bnameerror','bpasserror','nameerror');">
		<span id="nameerror" style="color:#993300;"></span>
		</br><span id="bnameerror" style="color:#993300; display:none; ">Please Enter Value</span></td>
      </tr>
      <tr>
        <td><label for="pwd">Password:*</label></td>
        <td><input type="Password" name="pwd" id= "pwd" placeholder ="Password" onFocus="validateLoginonFocusForm(this.id,'bpasserror','bnameerror','passerror');">
		<span id="passerror" style="color:#993300;"></span>
		</br><span id="bpasserror" style="color:#993300; display:none; ">Please Enter Value</span></td>
      </tr>
      	<tr> 
        <!-- *** Creating captcha -->       
      	<td><div id="myDiv" style="color:#993300; display:none"><input type="text" name="captcha_code" id="captcha_code" size="10" maxlength="6" placeholder="validation code"></br>
<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a></div></td>
      	<td><div id="myDiv1" style="color:#993300; display:none"><img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /></td>
        </tr>
        <tr>
        <td><input type="hidden" name="h" id="h" value="0"></td><td><span id="captchaerror" style="color:#993300;"></span></div></td>
      </div>
      </tr>
      <tr>
        <td><input type="button"  name ="button1" onClick="validateLoginonSubmitForm()" value="Log In"></td>
        <td><input type="button"  name ="button2" onClick="window.location='registrationpage.php'; return false;" value="Sign Up"></td>
      </tr>
    </table>
        </br>
</br>
    </form>
</body>
</html>


