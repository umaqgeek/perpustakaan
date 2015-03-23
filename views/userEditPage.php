<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="../css/lay_menu.css" />
<link rel="stylesheet" type="text/css" href="../css/susun_menu.css" />
<link rel="stylesheet" href="../css/Admin_ManageUser_css.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Page</title>
<script language="javascript">
	function proceed()
	{
		var pass = document.getElementById("pass").value;
		var name = document.getElementById("name").value;
		var address = document.getElementById("address").value;
		if(pass == "" || name == "" || address == "")
		{
			return false;
		}
		else
			return true;
	}
</script>
</head>
<body bgcolor="#CCCCCC">
<div id="container">
  
  <div id="Header">
    <h1 align="center"><b>Library System</b></h1>
    <p align="center"><b>User Profile</b></p>
  </div>

<div id="Nav">

<nav>
<ul><li><a href="<?php echo base_url()?>">Staff Page</a></li>
</ul>
</nav>
</div><!--Nav-->

<form action="<?php echo base_url()?>updateUserProfile/true" method="POST" class="table" onsubmit="return proceed()" >

<table align="center">

<tr>
<td>Ic Number</td>
<td>:</td>
<td>
<?php echo $result->ic ?>
<input type="hidden" name="userID" id="userID" value="<?php echo $result->ic ?>"/>
</td>
</tr>

<tr>
<td>Password</td>
<td>:</td>
<td>
<input type="text" name="pass" id="pass" value="<?php echo $result->password ?>" />
</td>
</tr>

<tr>
<td>Full Name</td>
<td>:</td>
<td>
<input type="text" name="name" id="name" value="<?php echo $result->name ?>"/>
</td>
</tr>

<tr>
<td>Address</td>
<td>:</td>
<td>
<input name="address" id="address" value="<?php echo $result->address ?>"></textarea>
</td></tr>

<tr>
<td>Num Of Loan </td>
<td>:</td>
<td>
<input type="text" name="numLoan" id="numLoan" value="<?php echo $result->numLoan ?>">
</td></tr>

<tr>
<td>Penalty</td>
<td>:</td>
<td>
<input type="text" name="penalty" id="penalty" value="<?php echo $result->penalty ?>"></textarea>
</td></tr>

<tr>
<td>*will add </td>
<td>:</td>
<td>
<!--<input type="text" name="ic" />-->
*will add</td>
</tr>

<tr>
<td>Phone Number</td>
<td>:</td>
<td>
<!--<input type="text" name="tel" />--> *will add
</td>
</tr>

<tr>
<td>E-mail</td>
<td>:</td>
<td>
<!--<input type="text" name="email" />-->
*will add
</td>
</tr>

<tr>
<td colspan="2" align="left">
<input type="submit" name="submit" value="Submit" />
</td>
<td align="center"></td>
</tr>


</table>

</form>


</div>
</body>
</html>