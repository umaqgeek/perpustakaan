<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="../css/lay_menu.css" />
<link rel="stylesheet" type="text/css" href="../css/susun_menu.css" />
<link rel="stylesheet" href="../css/Admin_ManageUser_css.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library System</title>
<script language="javascript">
	function proceed()
	{
		var name = document.getElementById("name").value;
		var pass = document.getElementById("pass").value;
		if(name == "" || pass == "")
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
    <h1 align="center"><b>Staff Login</b></h1>
</div>

<div id="Nav">

<nav>
<ul>
<li><a href="<?php echo base_url()?>">Home</a></li>
<!--<li><a href='?logout=true'>Logout</a></li>-->
</ul>
</nav>
</div><!--Nav--></div>
<form action="<?php echo base_url()?>loginStaffProcess" method="POST" class="table" onsubmit="return proceed()" >

<table align="center">

<tr>
<td>Ic Number</td>
<td>:</td>
<td>
<input type="text" name="name" id="name" />
</td>
</tr>

<tr>
<td>Password</td>
<td>:</td>
<td>
<input type="text" name="pass" id="pass" />
</td>
</tr>

<tr>
<td colspan="3" align="center">
<input type="submit" name="Login" value="Login" />
</td>
</tr>
</table>
</form>
</body>
</html>