<html>
<head>
<title>HTML Table</title>
</head>
<body>
<?php
if(isset($_post['submit']))
$firstname = $_post['firstname'];
$lastname = $_post['lastname'];
$password = $_post['password'];
$reenter password = $_post['reenter password'];
$email = $_post['email'];
$mobile = $_post['mobile'];
$address = $_post['address'];
$dob = $_post['dob'];
?>
<form action="" method="post">
<table border="1" align="center" width="400" bgcolor="#CCCCCC" >
<caption>Registration form</caption>
<tr>
<th>Enter your first name</th>
<td><input type="text" name="fn" id="fn1" maxlength="10" title="enter your first name" placeholder="enter your first name" required/></td>
</tr>
<tr>
<th>Enter your last name</th>
<td><input type="text"/></td>
</tr>
<tr>
<th>Enter your password</th>
<td><input type="password"/></td>
</tr>
<tr>
<th>ReEnter your password</th>
<td><input type="password"/></td>
</tr>
<tr>
<th>Enter your email</th>
<td><input type="email"/></td>
</tr>
<tr>
<th>Enter your mobile</th>
<td><input type="number"/></td>
</tr>
<tr>
<th>Enter your address</th>
<td><textarea rows="8" cols="20"></textarea></td>
</tr>
</tr>
<tr>
<th>Select your DOB</th>
<td><input type="date"/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="submit"/>
<input type="reset" value="Reset Data"/>
</td>
</tr>
</table>
</form>
</body>
</html>
